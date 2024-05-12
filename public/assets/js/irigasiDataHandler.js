fetch('/assets/IRIGASI_BOALEMO.json')
    .then(function(response) {
        return response.json();
    })
    .then(function(json) {
        addGeoJsonLayer(json);
        populateTable(json.features); // Fungsi baru untuk mempopulasi tabel
    })
    .catch(function(err) {
        console.log('Error memuat data GeoJSON: ' + err);
    });

function populateTable(features) {
    const tableBody = document.getElementById('myTableBody'); // Pastikan Anda memiliki tbody dengan id ini
    const tableHead = document.getElementById('myTableHead'); // Pastikan Anda memiliki thead dengan id ini

    // Menghapus isi thead dan tbody sebelumnya
    tableHead.innerHTML = '';
    tableBody.innerHTML = ''; // Menambahkan ini untuk menghapus baris placeholder

    // Membuat header tabel berdasarkan properti pertama dari features
    if (features.length > 0) {
        const headerRow = tableHead.insertRow();
        let headerCellIndex = 0;
        for (const key in features[0].properties) {
            const headerCell = headerRow.insertCell(headerCellIndex++);
            headerCell.innerHTML = key;
        }

        // Mengisi body tabel
        features.forEach((feature, index) => {
            const row = tableBody.insertRow();
            let cellIndex = 0;
            for (const key in feature.properties) {
                const cell = row.insertCell(cellIndex++);
                cell.innerHTML = feature.properties[key];
            }
        });
    }
}

