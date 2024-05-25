// Fungsi untuk memuat data JSON dan mengisikan ke dalam tabel
function loadDataToTable() {
    return fetch('assets/IRIGASI_BOALEMO.json')
        .then(response => response.json())
        .then(data => {
            const tableBody = document.getElementById('tableBody');
            tableBody.innerHTML = ''; // Bersihkan tabel terlebih dahulu

            data.features.forEach((feature, index) => {
                const row = tableBody.insertRow();
                const cell1 = row.insertCell(0);
                const cell2 = row.insertCell(1);
                const cell3 = row.insertCell(2);
                const cell4 = row.insertCell(3);
                const cell5 = row.insertCell(4);
                const cell6 = row.insertCell(5);

                cell1.innerHTML = index + 1;
                cell2.innerHTML = feature.properties.NAMOBJ;
                cell3.innerHTML = feature.properties.WADMPR;
                cell4.innerHTML = feature.properties.REMARK;
                cell5.innerHTML = feature.properties.SBDATA;
                cell6.innerHTML = feature.properties.KABUPATEN;
            });
        })
        .catch(err => console.error('Failed to load data: ' + err));
}

// Panggil fungsi saat dokumen siap
document.addEventListener('DOMContentLoaded', loadDataToTable);

