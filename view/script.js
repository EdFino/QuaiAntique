/*let week = ['Lundi', 'Mercredi - Vendredi', 'Samedi'];
let category = []
const regex = /mère/ig;
for (i = 0; i < week.length; i++) {
    if (regex.test(week[i])) {
        category.push(week[i].split('-').trim())
    } else {
        category.push(week[i])
    }
}

const cherche = document.getElementById('cherche').textContent;

if (regex.test(cherche)) {
  console.log('Oui, nous avons bien trouvé une mère')
} else {
  console.log('Nous avons rien trouvé uesh.')
}

const titleCategorie = document.getElementsByClassName('reservationSchedule');

function makeCategories() {

    const result = {};
  
    for (let i = 0; i < titleCategorie.length; i++) {
      const expression = titleCategorie[i];
      if (expression.indexOf('-')) {
        const range = expression.split('-').map(j => j.trim());
        result.debut = range[0];
        result.fin = range[1];
        break;
      }
    }
  
    return result;
  }
*/

//Afficher le formulaire de rajout d'image

const imageForm = document.getElementById('addImage');
const buttonImage = document.getElementById('image');

buttonImage.addEventListener("click", () => {
    if (imageForm.style.display == 'none') {
        imageForm.style.display = "block";
    } else {
        imageForm.style.display = "none";
    }
    });


// Afficher le formulaire des ajouts des horaires
const addSchedule = document.getElementById('addSchedule');
const buttonAdd = document.getElementById('add');

buttonAdd.addEventListener("click", () => {
    if (addSchedule.style.display == 'none') {
        addSchedule.style.display = "block";
    } else {
        addSchedule.style.display = "none";
    }
    });

//Afficher le formulaire de modification des horaires
const modifySchedule = document.getElementById('modifySchedule');
const buttonModify = document.getElementById('modify');

buttonModify.addEventListener("click", () => {
    if (modifySchedule.style.display == 'none') {
        modifySchedule.style.display = "block";
    } else {
        modifySchedule.style.display = "none";
    }
    });

// Afficher le formulaire de suppression des horaires
const deleteSchedule = document.getElementById('deleteSchedule');
const buttonDelete = document.getElementById('delete');

buttonDelete.addEventListener("click", () => {
    if (deleteSchedule.style.display == 'none') {
        deleteSchedule.style.display = "block";
    } else {
        deleteSchedule.style.display = "none";
    }
    });


    const titles = footer.getElementsByClassName('titleSchedule');




// Création des champs "title" sous forme de radio boutons
const titleFields = document.getElementById('deleteForm');
const titleSelect = document.getElementById ('deleteSelect');
let creationInput = document.createElement ('input');
let creationLabel = document.createElement ('label');
let creationOption = document.createElement ('option');

for (let j=0; j < titles.length; j++) { 
    console.log (titles[j].innerHTML.length)
    let creationOption = document.createElement ('option');
    creationOption.setAttribute ('value', titles[j].innerHTML)
    creationOption.textContent = titles[j].innerHTML
    titleSelect.appendChild (creationOption)

}

const modifySelect = document.getElementById('modifySelect');

for (let j=0; j < titles.length; j++) { 
    console.log (titles[j].innerHTML.length)
    let creationOption = document.createElement ('option');
    creationOption.setAttribute ('value', titles[j].innerHTML)
    creationOption.textContent = titles[j].innerHTML
    modifySelect.appendChild (creationOption)

}

function selectDay () {

    let reservationDay = document.getElementById("reservationDay");
    if (typeof reservationDay !== 'undefined') {
        let weekDays = ['Lundi', 'Mardi', 'Mecredi', 'Jeudi', 'Vendredi', 'Samedi', 'Dimanche'];
        for (let i = 0; i < weekDays.length; i++) {
            if (weekDays[i] = reservationDay) {
                return reservationDay;
            }
        }

    }

}


function makeCategories(titleCategories) {

    const result = {};
  
    for (let i = 0; i < titleCategorie.length; i++) {
      const expression = titleCategorie[i];
      if (expression.indexOf('-')) {
        const range = expression.split('-').map(j => j.trim());
        result.debut = range[0];
        result.fin = range[1];
        break;
      }
    }
  
    return result;
  }



//<option value="rep1">Réponse 1</option>
/*    console.log(titles[j].innerHTML);
    let creationInput = document.createElement ('input');
    let creationLabel = document.createElement ('label');
    creationInput.setAttribute ('type', 'radio')
    creationInput.setAttribute ('id', titles[j].innerHTML)
    creationInput.setAttribute ('name', titles[j].innerHTML)
    creationInput.setAttribute ('opt1', titles[j].innerHTML)
    creationLabel.setAttribute ('for', titles[j].innerHTML)
    creationLabel.textContent = titles[j].innerHTML
    titleFields.appendChild(creationInput)
    titleFields.appendChild(creationLabel)
      }; */


//  label.appendChild(radio);
//  label.appendChild(document.createTextNode(title));
//  titleFields.appendChild(label);
// });
