fetch('https://api.ipify.org?format=json')
    .then(response => response.json())
    .then(data => {
        var ip = data.ip;
        // adesso puoi utilizzare la variabile `ip` come desideri
    });

fetch('saveData.php', {
    method: 'POST',
    body: JSON.stringify({ data: data }),
    headers: { 'Content-Type': 'application/json' }
});