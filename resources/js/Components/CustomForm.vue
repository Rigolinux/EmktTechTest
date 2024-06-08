<script setup>
import { getSkills } from '@/api/skill';
import { addDeveloper } from '@/api/developer';
import { validate } from '@/helpers/FormValidator';
import { ref, onMounted } from 'vue';

const skillList = ref([]);
const fetchData = async () => {
  skillList.value = await getSkills();
};

onMounted(fetchData);

const firstName = ref('');
const lastName = ref('');
const age = ref('');
const email = ref('');
const selectedSkill = ref('');

const submitForm = async() => {





  const formData = {
    firstName: firstName.value,
    lastName: lastName.value,
    age: age.value,
    email: email.value,
    selectedSkill: selectedSkill.value
  };


  console.log(formData);
    if(validate(formData)){
        try{
            await addDeveloper(formData);
            alert('Desarrollador agregado correctamente');
        }
        catch(e){
            alert('Error al agregar desarrollador');
        }
      
    }else{
        console.log('Formulario invalido');
    }

};
</script>

<template>
    <div>
      <form @submit.prevent="submitForm">
        <div class="mb-3">
          <label for="firtName" class="form-label">Nombres</label>
          <input type="text" class="form-control" id="firtName" v-model="firstName" required>
        </div>
        <div class="mb-3">
          <label for="lastName" class="form-label">Apellidos</label>
          <input type="text" class="form-control" id="lastName" v-model="lastName" required>
        </div>
        <div class="mb-3">
          <label for="age" class="form-label">Edad</label>
          <input type="number" class="form-control" id="age" v-model="age" min="1" required>
        </div>
        <div class="mb-3">
          <label for="email" class="form-label">Correo Electronico</label>
          <input type="email" class="form-control" id="email" v-model="email" required>

        </div>
        <div class="mb-3">
          <label for="skill" class="form-label">Habilidad</label>
          <select class="form-control" v-model="selectedSkill" required>
            <option disabled value="">Seleccione una habilidad</option>
            <option v-for="skill in skillList" :key="skill.id" :value="skill.id">{{ skill.name }}</option>
          </select>
        </div>
        <button type="submit" class="btn btn-primary">Enviar</button>
      </form>
    </div>
  </template>
