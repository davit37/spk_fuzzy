function dateConvert(time) {
    let tanggal = time.split("-");
    let bulan;
    switch (tanggal[1]) {
        case '01':
            bulan = "Jan";
            break;
        case '02':
            bulan = "Feb";
            break;
        case '03':
            bulan = "Mar";
            break;
        case '04':
            bulan = "Apr";
            break;
        case '05':
            bulan = "Mei";
            break;
        case '06':
            bulan = "Jun";
            break;
        case '07':
            bulan = "jul";
            break;
        case '08':
            bulan = "Agu";
            break;
        case '09':
            bulan = "Sep";
            break;
        case '10':
            bulan = "Okt";
            break;
        case '11':
            bulan = "Nov";
            break;
        case '12':
            bulan = "Des";
            break;
    }
    let tanggalConvert = `${tanggal[2]} ${bulan} ${tanggal[0]}`;

    return tanggalConvert;
}



