$(function () {
    findAll();
});

function findAll() {
    var email = sessionStorage.getItem("email");
    console.log(email);
    $.ajax({
        url: 'http://localhost:8080/jalon2/catalogue/public/index.php/film/findPlaylist',
        data: {email,email},
        type: 'post',
        dataType: 'json',
        success: function (data) {
            // console.log(data[0].title);
            setData(data);
        }
    });
}

function setData(data) {
    console.log(data);
    var html = "";
    for(let i = 0; i < data.length; i++){
        var title = data[i].title;
        var img = data[i].image;
        var director = data[i].director;
        var description = data[i].description;
        var actor = data[i].actor;
        html += '<tr>'+
        '<th scope="row"><strong>'+title+'</strong></th>'+
        '<td><img src="'+img+'" height="200" width="300"/></td>'+
        '<td>'+director+'</td>'+
        '<td>'+description+'</td>'+
        '<td>'+actor+'</td>'+
        '</tr>';
    }
    $("#content").html(html);
}