let username = document.getElementById('username');
let password = document.getElementById('password');
let namaAdmin = document.getElementById('namaAdmin');
let jenisKlamin = document.getElementById('jenisKlamin');
let tanggalLahir = document.getElementById('tanggalLahir');
let simpan = document.getElementById('simpan');
let tableAdmin = document.getElementById('tableAdmin');
let idAdmin = document.getElementById('idAdmin');
let deleteAdmin;

function tambahAdmin() {
    let data = {
        'idAdmin':$('#kd_admin').val(),
        'username': username.value,
        'password': password.value,
        'namaAdmin': namaAdmin.value,
        'jenisKlamin': jenisKlamin.value,
        'tanggalLahir': tanggalLahir.value
    }
    let str_json = JSON.stringify(data);
    request = new XMLHttpRequest();
    request.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            if (data.username!=""){
                swal(
                    'Sukses?',
                    'Data berhasil disimpan',
                    'success'
                  )
            }
            let dataJSON = JSON.parse(this.responseText);
            let number = 0,
                table = "",
                tanggal = '';
            for (x in dataJSON) {
                tanggal = dataJSON[x].tanggal_lahir;
                //tanggal = tanggal.split("-").reverse().join(" ");
                number += 1;

                table += `<tr>
                        <th>${number}</th>
                        <td>${dataJSON[x].nama_admin}</td>
                        <td>${dateConvert(tanggal )}</td>
                        <td>${dataJSON[x].jenis_klamin}</td>
                        <td><i id="${dataJSON[x].kd_admin}" class="fa fa-trash hapus deleteAdmin pointer" triger="del" ></i> <i id="${dataJSON[x].kd_admin}" triger="edit" class="fa fa-edit edit editAdmin pointer"></i></td>
                        `;
            }
            // document.getElementById("demo").innerHTML = txt;
            tableAdmin.innerHTML = table;

        }
    };
    request.open("POST", "./inc/php/admin.php", true)
    request.setRequestHeader("Content-type", "application/x-www-form-urlencoded")
    request.send("data=" + str_json+'&triger='+$('#simpan').attr('triger'));
  
    username.value = '';
    password.value = '';
    namaAdmin.value = '';
}


simpan.addEventListener('click', tambahAdmin);

window.addEventListener('load', tambahAdmin);

$(document).on('mouseover', '.pointer', function () {
    this.style.cursor="pointer";
})

$(document).on('click', '.deleteAdmin', function () {
    var del_id = $(this).attr("id");
    var del_triger = $(this).attr("triger");

    swal({
        title: 'Anda yakin ?',
        text: "Data ini akan dihapus !",
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#74b9ff',
        cancelButtonColor: '#ff7675',
        confirmButtonText: 'Ya, Hapus!'
      }).then((result) => {
        if (result.value) {
            $.ajax({
                type: "POST",
                url: "./inc/php/admin.php",
                data: 'id=' + del_id + '&triger=' + del_triger,
                success: function (dataJSON) {
    
                    let number = 0,
                        table = "",
                        tanggal = '';
                    for (x in dataJSON) {
                        tanggal = dataJSON[x].tanggal_lahir;
                        //tanggal = tanggal.split("-").reverse().join(" ");
                        number += 1;
    
                        table += `<tr>
                        <th>${number}</th>
                        <td>${dataJSON[x].nama_admin}</td>
                        <td>${dateConvert(tanggal )}</td>
                        <td>${dataJSON[x].jenis_klamin}</td>
                        <td><i id="${dataJSON[x].kd_admin}" class="fa fa-trash hapus deleteAdmin pointer" triger="del" ></i> <i id="${dataJSON[x].kd_admin}" triger="edit" class="fa fa-edit edit editAdmin pointer"></i></td>
                        `;
                    }
                    swal(
                        'Sukses !',
                        'Data Berhasil Dihapus.',
                        'success'
                      )
                    $('#tableAdmin').html(table);
                },
                
            });
        }})
        
    var detik = 3;

    function hitung() {
        var to = setTimeout(hitung, 1000);
        detik--;
        if (detik < 0) {
            clearTimeout(to);
            $("#gagalpop, #successpop").hide('slow');
        }
    }
    hitung();
});

$(document).on('click', '.editAdmin', function(){
    let edit_id = $(this).attr('id');
    let edit_triger= $(this).attr('triger');

    $.ajax({
        type: "POST",
        url: "./inc/php/admin.php",
        data: 'id=' + edit_id + '&triger=' + edit_triger,
        success: function (dataJSON) {
            for (x in dataJSON) {
                $('#kd_admin').val(dataJSON[x].kd_admin);
                 $('#username').val(dataJSON[x].username);
                 $('#password').val(dataJSON[x].password);
                 $('#namaAdmin').val(dataJSON[x].nama_admin);
                 $('#tanggalLahir').val(dataJSON[x].tanggal_lahir);
                 $('#jenisKlamin').val(dataJSON[x].jenis_klamin);
                 $('#simpan').attr('triger', 'update');
                 $('#kd_admin').val(dataJSON[x].kd_admin);
            }
        }
            
    })
})







//koding untuk gijgo datepicker

$('#tanggalLahir').datepicker({

    minDate: '1970/12/12',
    maxDate: '2001/12/12',
    format: 'yyyy-mm-dd',
    uiLibrary: 'bootstrap4'
});