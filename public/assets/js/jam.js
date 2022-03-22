function getServerTime() {
    return $.ajax({ async: false }).getResponseHeader('Date');
}
function realtimeClock() {
    $.get('pengunjung/active', function (data) {
        document.getElementById("online").innerHTML = data;
    });
    
    var rtClock = new Date();
    var rtClock = new Date(getServerTime());
    var hours = rtClock.getHours();
    var minutes = rtClock.getMinutes();
    var seconds = rtClock.getSeconds();

    // menampilkan AM PM
    var amPm = (hours < 12) ? "AM" : "PM";
    // hours = (hours > 12) ? hours - 12 : hours;

    hours = ("0" + hours).slice(-2);
    minutes = ("0" + minutes).slice(-2);
    seconds = ("0" + seconds).slice(-2);

    document.getElementById("clock").innerHTML =
        hours + " : " + minutes + " : " + seconds
    + "  ";
    var jamnya = setTimeout(realtimeClock, 500);

    if (rtClock.getTimezoneOffset() == 0) (a=rtClock.getTime() + ( 7 *60*60*1000))
    else (a=rtClock.getTime());
    rtClock.setTime(a);
    var tahun= rtClock.getFullYear ();
    var hari= rtClock.getDay ();
    var bulan= rtClock.getMonth ();
    var tanggal= rtClock.getDate ();
    var hariarray=new Array("Minggu,","Senin,","Selasa,","Rabu,","Kamis,","Jum'at,","Sabtu,");
    var bulanarray=new Array("Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","Nopember","Desember");
    document.getElementById("tanggalwaktu").innerHTML = hariarray[hari]+" "+tanggal+" "+bulanarray[bulan]+" "+tahun;
}