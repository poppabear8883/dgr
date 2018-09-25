<template>
  <div class="giveaway">

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

    <div class="row edit-form">
      <div class="col-xs-12 col-md-6">
        <div class="styled-input">
          <datepicker :use-utc="false" format="dd MMM yyyy" v-model="editData.ends_at"></datepicker>
        </div>
      </div>
      <div class="col-xs-12 col-md-6">
        <div class="styled-input">
          <input type="text" v-model="editData.title" required/>
          <label>Title</label>
        </div>
      </div>
    </div>

    <div class="row edit-form">
      <div class="col-xs-12 col-md-12">
        <div class="styled-input">
          <textarea rows="5" v-model="editData.description" required></textarea>
          <label>Description</label>
        </div>
      </div>
      <div class="col-xs-12 col-md-12">
        <div class="styled-input">
          <textarea rows="10" v-model="editData.features" required></textarea>
          <label>Features (One per line)</label>
        </div>
      </div>
    </div>

    <div class="row edit-form">
      <div class="col-xs-12 col-md-6">
        <div class="styled-input">
          <input type="file" @change="processFile($event, 'main')"/>
          <label>Main Image</label>
        </div>
      </div>
      <div class="col-xs-12 col-md-6">
        <div class="styled-input">
          <input type="file" @change="processFile($event, 'product_image')"/>
          <label>Product Image</label>
        </div>
      </div>
      <div class="col-xs-12 col-md-6">
        <div class="styled-input">
          <input type="file" @change="processFile($event, 'product_image_2')"/>
          <label>Product Image 2</label>
        </div>
      </div>
      <div class="col-xs-12 col-md-6">
        <div class="styled-input">
          <input type="file" @change="processFile($event, 'product_image_3')"/>
          <label>Product Image 3</label>
        </div>
      </div>
      <div class="col-xs-12 col-md-6">
        <div class="styled-input">
          <input type="file" @change="processFile($event, 'product_image_4')"/>
          <label>Product Image 4</label>
        </div>
      </div>
    </div>

    <div class="row edit-form">
      <div class="col-xs-12 col-md-3">
        <div @click="update()" class="btn-lrg form-btn">Save</div>
      </div>
    </div>

    <!-- row -->
  </div>
</template>
<script>
  import Datepicker from 'vuejs-datepicker';

  export default {
    name: 'admin-giveaway',
    props: {
      giveaway: { required: true },
    },
    components: {
      Datepicker,
    },
    data() {
      return {
        success: '',
        errors: [],
        editData: {
          ends_at: this.giveaway.ends_at,
          title: this.giveaway.title,
          description: this.giveaway.description,
          features: this.giveaway.features,
          image: this.giveaway.image,
          product_image: this.giveaway.product_image,
          product_image_2: this.giveaway.product_image_2,
          product_image_3: this.giveaway.product_image_3,
          product_image_4: this.giveaway.product_image_4
        },
      };
    },
    methods: {
      update() {
        this.errors = [];

        axios.put(`/api/giveaway/${this.giveaway.id}`, this.editData)
          .then((response) => {
            this.success = `Successfully Updated Giveaway!`;
          }).catch((error) => {
          this.errors.push(error.response.data.message);
        });
      },
      processFile(e, where) {
        let files = e.target.files || e.dataTransfer.files;
        console.log(files);

        if (!files.length)
          return;

        this.createImage(files[0], where);
      },
      createImage(file, where) {
        let reader = new FileReader();

        let vm = this;

        reader.onload = (e) => {
          switch (where) {
            case 'image':
              vm.editData.image = e.target.result;
              break;
            case 'product_image':
              vm.editData.product_image = e.target.result;
              break;
            case 'product_image_2':
              vm.editData.product_image_2 = e.target.result;
              break;
            case 'product_image_3':
              vm.editData.product_image_3 = e.target.result;
              break;
            case 'product_image_4':
              vm.editData.product_image_4 = e.target.result;
              break;
            default:
              console.error(`Invalid where '${where}' ...`);
          }
        };

        reader.readAsDataURL(file);
      },
    },

  };
</script>
<style lang="scss">
  @import '~Sass/_variables.scss';

  .giveaway {
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
        min-height: 5em;
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
  }

</style>