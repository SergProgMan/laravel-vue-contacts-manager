<template>
<div>
    <h1>Contacts</h1>
    <form action="#" @submit.prevent = "edit ? updateContact(contact.id) : createContact()">
        <div class="form-group">
             <label>Name</label>
             <input v-model="contact.name" type="text" name="name" class="form-control">
        </div>

        <div class="form-group">
             <label>Email</label>
             <input v-model="contact.email" type="text" name="email" class="form-control">
        </div>

        <div class="form-group">
             <label>Phone</label>
             <input v-model="contact.phone" type="text" name="phone" class="form-control">
        </div>

        <div class="form-group">
            <button v-show="!edit" type="submit" class="btn btn-primary">New Contact</button>
            <button v-show="edit" type="submit" class="btn btn-primary">Update Contact</button>
        </div> 

    </form>
</div >
</template>


<script>
    export default{
        data: function(){
            return {
                edit : false,
                list : [],
                contact:{
                    id:'',
                    name:'',
                    email:'',
                    phone:''
                }
            }
        },
        mounted: function(){
            console.log('Contacts Component Loaded...'); 
        },

        methods: {
            createContact: function(){
                console.log('Creating contact...');
                return;
            },
            updateContact: function(id){
                console.log('Updating contact '+id+'...');
                return;
            }
        }
    }
</script>