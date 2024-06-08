export const validate = (form) => {

          const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
          if (!emailPattern.test(form.email)) {
              alert('El correo electrónico no es válido');
              return false;
          }

          if (isNaN(form.age) || form.age <= 0) {
              alert('La edad debe ser un número mayor a 0');
                return false;
          }

          if (!form.selectedSkill) {
              alert('Debes seleccionar una habilidad');
                return false;
          }

         
          if (!form.firstName || !lastName.value) {
              alert('Los campos de nombres y apellidos son obligatorios');
               return false;
          }

          return true;
      };
