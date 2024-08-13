const xhr = new XMLHttpRequest();
xhr.open('GET', '03_arrays.php', true)
xhr.onload = function(){
    if(this.status == 200){
        console.log(this.responseText);
    }
}
xhr.send()