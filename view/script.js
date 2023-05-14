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
