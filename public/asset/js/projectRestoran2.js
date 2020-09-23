// Map dan Looping harga
const katalogMenu = [
    {
        foto: "gambar/banana-nugget.jpg",
        nama: 'Banana Nugget',
        deskripsi: 'Pisang digoreng dengan topping coklat, keju, stroberi, green tea, dan kopi',
        harga: 'Rp.15K'
    }, {
        foto: "gambar/banana-split.jpg",
        nama: 'Banana Split',
        deskripsi: 'Pisang digoreng dengan Es Krim',
        harga: 'Rp.20K'
    }, {
        foto: "gambar/lava-cake.jpg",
        nama: 'Lava Cake',
        deskripsi: 'Dengan dark chocolate melted',
        harga: 'Rp.23K'
    }, {
        foto: "gambar/macaroni-schotel.jpeg",
        nama: 'Macaroni Schotel',
        deskripsi: 'Macaroni dengan topping keju mozarella dan oregano',
        harga: 'Rp.28K'
    }, {
        foto: "gambar/martabak-mie.jpg",
        nama: 'Martabak Mie',
        deskripsi: 'Cocok Untuk Jajanan Santai',
        harga: 'Rp.10K'
    }, {
        foto: "gambar/onion-rings.jpg",
        nama: 'Onion Rings',
        deskripsi: 'Bawang Bombai yang digoreng cocok buat Jajanan Santai',
        harga: 'Rp.12K'
    }, {
        foto: "gambar/dimsum-ayamudang.jpg",
        nama: 'Dimsum Ayam Udang',
        deskripsi: 'Isian Ayam dan Udang berisikan 5 dimsum',
        harga: 'Rp.15K'
    }, {
            foto: "gambar/nachos.jpg",
            nama: 'Nachos',
            deskripsi: 'Dengan nachos dan daging asap',
            harga: 'Rp.17K'
    }, {
        foto: "gambar/bubbletea-brown.jpg",
        nama: 'Bubble Tea',
        deskripsi: 'Minuman pelepas jenuh',
        harga: 'Rp.16K'
    }, {
        foto: "gambar/ice-tea.jpg",
        nama: 'Ice Tea',
        deskripsi: 'Minuman dengan harga terbaik',
        harga: 'Rp.7K'
    }, {
        foto: "gambar/kopi-gularen.jpg",
        nama: 'Kopi Gula Aren',
        deskripsi: 'Minuman kopi campur susu dan gula aren bikin nagih',
        harga: 'Rp.14K'
    }, {
        foto: "gambar/blueocean-drink.jpg",
        nama: 'Blue Ocean Drink',
        deskripsi: 'Minuman yang cocok di feed Instagram',
        harga: 'Rp.16K'
    }
];

const jumlahMakanan = (array) => {
    const jmlItemUnsur = document.querySelector('.kolom-pesan p');
    const jumlahItem = array.reduce((accumulator) => {
        return accumulator + 1;
    }, 0);
    jmlItemUnsur.innerHTML = jumlahItem;
}

const panggilMenu = (item, index, array)=>{
    const unsur = document.querySelector('#menu-zelict > .row');

    unsur.innerHTML += `
    <div class="data-box">
        <img src="${item.foto}">
        <h2>${item.nama}</h2>
        <h3>${item.deskripsi}</h3>
        <h4 class="text-uppercase">${item.harga}</h4>
        <a href="#">Pesan</a>
    </div>
    `
}

katalogMenu.map(panggilMenu);
jumlahMakanan(katalogMenu);

const buttonUnsur = document.querySelector('.button-cari');
buttonUnsur.addEventListener('click', ()=>{
    const hasilFilter = katalogMenu.filter((item, index)=>{
            const inputUnsur    = document.querySelector('.input-keyword');
            const namaItem      = item.nama.toLowerCase();
            const kataKunci     = inputUnsur.value.toLowerCase();

            return namaItem.includes(kataKunci);
    })
    document.querySelector('#menu-zelict > .row').innerHTML = '';
    hasilFilter.map(panggilMenu);
    jumlahMakanan(hasilFilter);
});