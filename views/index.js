const tbody = document.querySelector('#tbody');
const tr = document.createElement("tr");

function edit(param){
    Swal.fire({
        title: `Edit ${param} product`,
        html: `<input type="text" id="name" class="swal2-input" placeholder="name">
        <input type="text" id="details" class="swal2-input" placeholder="details">
        `,
        confirmButtonText: 'Save',
        color: 'white',
        background: 'var(--gray-dark)',
        focusConfirm: false,
        preConfirm: () => {
            const name = Swal.getPopup().querySelector('#name').value
            const details = Swal.getPopup().querySelector('#details').value
            if (!name || !details) {
                Swal.showValidationMessage(`Please enter missing fields`)
              }
              return { 'id': param ,name, details }
        }
      }).then((result) => {
        Swal.fire({
            html: "Saved Successfuly",
            color: "white",
            background: "var(--gray-dark)",
        })
        updateItem(result.value)
      });
    $('.swal2-input').css("color","white");


}


function updateItem(param){
    $.ajax({
        type: "POST",
        url: "../bd/update.php",
        data: param,
        dataType: "json",
        success: (response) =>{
            const updatetr = document.getElementById(param.id);
            updatetr.innerHTML= `
            <td>${param.id}</td>
            <td>${param.name}</td>
            <td>${param.details}</td>
            <td>test/test/test</td>
            <td>test</td>
            <td>
            <button class="btn btn-orange py-1 text-dark" onClick="edit(${param.id})">Edit</button>
            </td>
            <td>
            <button class="btn btn-danger py-1 text-dark">Delete</button>
            </td>
            `;
        }
    });

}

function logout () {
    window.location.href = "../bd/logout.php";
}

$(document).ready(function () {

    console.log(tbody);
    $.ajax({
        type: "get",
        url: "../bd/list.php",
        dataType: "json",

        success: (response) => {
            response?.map((item) => {
            tr.id = item.id;
            tr.innerHTML = `
            <td>${item.id}</td>
            <td>${item.name}</td>
            <td>${item.details}</td>
            <td>${item.date}</td>
            <td>${item.by}</td>
            <td>
            <button class="btn btn-orange py-1 text-dark" onClick="edit(${item.id})">Edit</button>
            </td>
            <td>
            <button class="btn btn-danger py-1 text-dark">Delete</button>
            </td>
            `;
            tbody.appendChild(tr);
            })
        }
    });

});
