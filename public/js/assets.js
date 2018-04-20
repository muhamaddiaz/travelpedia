function validate_email(email) {
    var re = /^\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$/; 
    console.log('hai');
    return re.test(String(email).toLowerCase());
}
function validate() {
    let b = $('#fullname');
    let c = $('#username');
    let d = $('#email');
    let f = $('#password');
    let e_b = $('#e_spot2');
    let e_c = $('#e_spot3');
    let e_d = $('#e_spot4');
    let e_e = $('#e_spot5');
    let e_f = $('#e_spot6');
    let error = 0;
    if(b.val() == '') {
        e_b.text('* fullname tidak boleh kosong');
        error++;
    } else {
        e_b.text('');
    }
    if(c.val() == '') {
        e_c.text('* username tidak boleh kosong');                    
        error++;
    } else {
        e_c.text('');
    }
    if(d.val() == '') {
        e_d.text('* email tidak boleh kosong');
        error++;
    } else if(!validate_email(d.val())) {
        e_d.text('* email tidak memenuhi format');
        error++;
    } else {
        e_d.text('');
    }
    if(f.val() == '') {
        e_f.text('* password tidak boleh kosong');
        error++;
    } else {
        e_f.text('');
    }
    console.log(error);
    if(error != 0) {
        return false;
    }
    return true;
}
function validate2() {
    let a = $('#id_barang');
    let e_a = $('#e_spot1');
    if(a.val() == '') {
        e_a.text('* Id tidak boleh kosong');
        return false;
    } else {
        e_a.text('');
        if(confirm("Apa anda yakin ?")) {
            return true;
        } else {
            return false;
        }
    }
}
function validate3() {
    let a = $('#username');
    let b = $('#password');
    let e_a = $('#e_spot1');
    let e_b = $('#e_spot2');
    let error = 0;
    if(a.val() == '') {
        e_a.text('* username tidak boleh kosong');
        error++;
    } else {
        e_a.text('');
    }
    if(b.val() == '') {
        e_b.text('* password tidak boleh kosong');
        error++;
    } else {
        e_b.text('');
    }
    if(error != 0) {
        return false;
    }
    return true;
}

function validate4() {
    let a = $('#nama_barang');
    let b = $('#tanggal_pembelian');
    let c = $('#jumlah_barang');
    let e_a = $('#e_spot2');
    let e_b = $('#e_spot3');
    let e_c = $('#e_spot4');
    let error = 0;
    if(a.val() == '') {
        e_a.text('* nama barang tidak boleh kosong');
        error++;
    } else {
        e_a.text('');
    }
    if(b.val() == '') {
        e_b.text('* tanggal pembelian tidak boleh kosong');
        error++;
    } else {
        e_b.text('');
    }
    if(c.val() == '') {
        e_c.text('* jumlah barang tidak boleh kosong');
        error++;
    } else {
        e_c.text('');
    }
    
    if(error != 0) {
        return false;
    }
    return true;
}

function delete_validate() {
    if(confirm('Apa anda yakin? ')) {
        return true;
    } else {
        return false;
    }
}

function dateRequestValidate() {
    let x = new Date($('#berangkat').val());
    let y = new Date($('#pulang').val());
    if(y > x) {
        return true;
    }
    alert("Tanggal tidak valid");
    return false;
}