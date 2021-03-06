<template>
    <div class="photos">

        <div v-if="success !== ''" class="row">
            <div class="col-xs-12">
                <div class="alert alert-success">
                    {{success}}
                </div>
            </div>
        </div>

        <div v-if="errors.length > 0" class="row">
            <div class="col-xs-12">
                <div class="alert alert-danger">
                    <ul>
                        <li v-for="error in errors">{{error}}</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-3">
                <button @click="adding = !adding" type="button" class="btn btn-default btn-lg">
                    <i :class="['fa', adding ? 'fa-minus' : 'fa-plus']"></i>
                </button>
            </div>
        </div>

        <div v-if="adding" class="row add-form">
            <div class="col-xs-12 col-md-4">
                <div class="styled-input">
                    <input type="file" @change="processFile($event)"/>
                    <label>Photo</label>
                </div>
            </div>
            <div class="col-xs-12 col-md-4">
                <div class="styled-input">
                    <input v-model="addData.description" type="text" required/>
                    <label>Description</label>
                </div>
            </div>
            <div class="col-xs-12 col-md-4">
                <div @click="add()" class="btn-lrg form-btn">Save</div>
            </div>
            <div class="col-xs-12 col-md-6">
                <h3 class="color-red">Galleries</h3>
                <table class="table table-condensed">
                    <tbody>
                    <tr v-for="gallery in galleries">
                        <td>
                            <input type="checkbox" :id="gallery.id" :value="gallery.id" v-model="addData.galleries">
                        </td>
                        <td>{{gallery.name}}</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div v-if="store.length <= 0" class="row">
            <div class="col-md-12 text-center">
                <h1>No Photos</h1>
            </div>
        </div> <!-- row -->

        <div v-else class="row">

            <div class="col-md-4 col-sm-6 col-xs-12" v-for="photo in store">
                <div :class="['photo-img', editing_id !== 0 ? 'editing' : null]">
                    <img class="img-responsive"
                         :src="imageSrc(photo)"
                         :alt="photo.name">

                    <div class="overlay">
                        <h2>{{photo.description}}</h2>
                        <a @click.prevent="edit(photo)" class="info" href="">
                            {{ editing_id === photo.id ? 'Cancel Edit' : 'Edit'}}
                        </a>
                    </div>
                </div>

                <div v-if="editing_id === photo.id" class="row edit-form">
                    <div class="col-md-12">
                        <div class="styled-input">
                            <input v-model="editData.description" type="text" required/>
                            <label>Description</label>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <h3 class="color-red">Galleries</h3>
                        <table class="table table-condensed">
                            <tbody>
                            <tr v-for="gallery in galleries">
                                <td>
                                    <input type="checkbox" :id="gallery.id" :value="gallery.id" v-model="editData.galleries">
                                </td>
                                <td>{{gallery.name}}</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="col-xs-12 col-md-3">
                        <div @click="update(photo.id)" class="btn-lrg form-btn">Save</div>
                    </div>
                </div>
            </div>

        </div> <!-- row -->
    </div>
</template>
<script>
  export default {
    props: {
      photos: {required: true},
      galleries: {required: true}
    },
    data () {
      return {
        adding: false,
        editing_id: 0,
        store: this.photos,
        success: '',
        errors: [],
        addData: {
          img: '',
          description: '',
          name: '',
          galleries: []
        },
        editData: {
          name: '',
          description: '',
          galleries: []
        }
      }
    },
    methods: {
      add () {
        this.errors = []

        if (this.addData.description === '' || this.addData.img === '') {
          this.errors.push(`The Photo and Description are both required!`)
          return false
        }

        if (this.addData.galleries.length <= 0) {
          this.errors.push(`You must choose at least 1 Gallery for this photo!`);
        }

        if (this.errors.length === 0) {
          axios.post(`/api/photos/create`, this.addData)
            .then((response) => {
              this.clearData()
              this.store.push(response.data)
              this.success = `Successfully Added ${response.data.name}`
            }).catch((error) => {
            this.errors.push(error.response.data.message)
            return false
          })
        }

        return true

      },
      edit (photo) {
        if (photo.name !== this.editData.name) {
          this.editData = {
            name: photo.name,
            description: photo.description,
            galleries: photo.gallery_ids
          }
          this.editing_id = photo.id
        } else {
          this.clearData()
        }
      },
      update (id) {
        this.errors = []

        axios.put(`/api/photos/update/${id}`, this.editData)
          .then((response) => {
            this.clearData()

            for (let i in this.store) {
              if (this.store[i].id === id) {
                this.store.splice(i, 1, response.data)
                break
              }
            }

            this.success = `Successfully Updated ${response.data.name}`

          }).catch((error) => {
          this.errors.push(error.response.data.message)
        })
      },
      processFile (e) {
        let files = e.target.files || e.dataTransfer.files

        if (!files.length)
          return

        this.createImage(files[0])
      },
      createImage (file) {
        let reader = new FileReader()

        let vm = this

        reader.onload = (e) => {
          this.adding ? vm.addData.name = file.name : vm.editData.img = file.name
          this.adding ? vm.addData.img = e.target.result : vm.editData.img = e.target.result
        }

        reader.readAsDataURL(file)
      },
      imageSrc (photo) {
        return `${photo.path}?w=700&h=400&fit=crop`
      },
      clearData () {
        this.adding = false
        this.editing_id = 0

        this.addData = {
          img: '',
          description: '',
          name: '',
          galleries: []
        }

        this.editData = {
          name: '',
          description: '',
          galleries: []
        }
      }
    }

  }
</script>
<style lang="scss" scoped>
    @import '~Sass/_variables.scss';

    .photos {
        .row {
            margin-bottom: 2rem;
        }

        .add-form,
        .edit-form {
            input:focus ~ label, textarea:focus ~ label, input:valid ~ label, textarea:valid ~ label {
                font-size: .8em;
                color: #9b9b9b;
                top: -10px;
                left: -5px;
                transition: all 0.225s ease;
            }

            .styled-input {
                float: left;
                width: 100%;
                margin: 1rem 0;
                position: relative;
                border-radius: 4px;

                label {
                    color: $white;
                    padding: 1.3rem 30px 1rem 30px;
                    position: absolute;
                    top: 10px;
                    left: 0;
                    transition: all 0.25s ease;
                    pointer-events: none;
                }

            }

            input,
            textarea {
                border: 0;
                width: 100%;
                font-size: 1.5rem;
                background-color: $dark;
                color: $white;
                border-radius: 4px;
                padding: 25px 25px 20px;
            }

            input:focus,
            textarea:focus {
                outline: 0;
            }

            input:focus ~ span,
            textarea:focus ~ span {
                width: 100%;
                transition: all 0.075s ease;
            }

            textarea {
                width: 100%;
                min-height: 15em;
            }

            .form-btn {
                margin-top: 20px;
                padding: 7px 35px;
                border-radius: 60px;
                display: inline-block;
                background-color: $red;
                color: white;
                font-size: 18px;
                cursor: pointer;
                box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.06),
                0 2px 10px 0 rgba(0, 0, 0, 0.07);
                transition: all 300ms ease;

                &:hover {
                    transform: translateY(1px);
                    box-shadow: 0 1px 1px 0 rgba(0, 0, 0, 0.10),
                    0 1px 1px 0 rgba(0, 0, 0, 0.09);
                }

                @media (max-width: 768px) {
                    width: 100%;
                    //float: none;
                    text-align: center;
                }
            }

            input[type=checkbox] {
                + label {
                    color: #ccc;
                    font-style: italic;
                }

                &:checked + label {
                    color: #f00;
                    font-style: normal;
                }
            }
        }

        .photo-img {
            width: 100%;
            height: 100%;
            float: left;
            overflow: hidden;
            position: relative;
            text-align: center;
            cursor: default;
            margin-bottom: 1rem;

            &:hover {
                .overlay {
                    opacity: 1;
                    filter: alpha(opacity=100);
                }

                h2, a.info {
                    opacity: 1;
                    filter: alpha(opacity=100);
                    transform: translatey(0);
                    transition-delay: .2s;
                }

                img {
                    transform: scale(1.2);
                }
            }

            .overlay {
                width: 100%;
                height: 100%;
                position: absolute;
                overflow: hidden;
                top: 0;
                left: 0;
                opacity: 0;
                background-color: rgba(0, 0, 0, 0.5);
                transition: all .4s ease-in-out
            }

            img {
                display: block;
                position: relative;
                transition: all .4s linear;
            }

            h2 {
                text-transform: uppercase;
                color: #fff;
                text-align: center;
                position: relative;
                font-size: 17px;
                background: rgba(0, 0, 0, 0.6);
                transform: translatey(-100px);
                transition: all .2s ease-in-out;
                padding: 10px;
            }

            a {
                &.info {
                    text-decoration: none;
                    display: inline-block;
                    text-transform: uppercase;
                    color: #fff;
                    border: 1px solid #fff;
                    background-color: transparent;
                    opacity: 0;
                    filter: alpha(opacity=0);
                    transition: all .2s ease-in-out;
                    margin: 70px 0 0;
                    padding: 7px 14px;

                    &:hover {
                        box-shadow: 0 0 5px #fff;
                    }
                }
            }
        }
    }
</style>