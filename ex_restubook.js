const express = require('express')
const path = require('path')
const app = express()
const port = 3000


app.get('/ResBook/taramaa', (req, res) =>{
    res.sendFile(path.join(__dirname, 'taramaa.html'));
})
app.get('/ResBook/taramaa/reservation', (req, res) =>{
    res.sendFile(path.join(__dirname, 'reservation.php'));
})

app.get('/ResBook/tomdiner', (req, res) =>{
    res.sendFile(path.join(__dirname, 'tomdiner.html'));
})
app.get('/ResBook/tomdiner/reservation', (req, res) =>{
    res.sendFile(path.join(__dirname, 'reservation.php'));
})

app.get('/ResBook/vellorekitchen', (req, res) =>{
    res.sendFile(path.join(__dirname, 'vellorekitchen.html'));
})
app.get('/ResBook/vellorekitchen/reservation', (req, res) =>{
    res.sendFile(path.join(__dirname, 'reservation.php'));
})

app.get('/ResBook/rongo', (req, res) =>{
    res.sendFile(path.join(__dirname, 'rongo.html'));
})
app.get('/ResBook/rongo/reservation', (req, res) =>{
    res.sendFile(path.join(__dirname, 'reservation.php'));
})

app.get('/ResBook/BBQvellore', (req, res) =>{
    res.sendFile(path.join(__dirname, 'BBQvellore.html'));
})
app.get('/ResBook/BBQvellore/reservation', (req, res) =>{
    res.sendFile(path.join(__dirname, 'reservation.php'));
})
app.get('/foodorder/mexican', (req, res) =>{
    res.sendFile(path.join(__dirname, 'mexican2.html'));
})
app.get('/foodorder/indian', (req, res) =>{
    res.sendFile(path.join(__dirname, 'indian2.html'));
})
app.get('/foodorder/italian', (req, res) =>{
    res.sendFile(path.join(__dirname, 'italian2.html'));
})

app.listen(port, () =>{
    console.log("listening... server running");
})