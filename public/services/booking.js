var reservation = document.getElementsByClassName('input-booking-heure');
var validation = document.getElementsByClassName('validation');
var close = document.getElementsByClassName('no');

for (let i = 0; i < reservation.length; i++) {
   reservation[i].addEventListener('click', function(){
        console.log("reservation[i]",reservation[i]);
        switch (reservation[i].value) {
            case '10:00':
                validation[0].style.left ='37%';
                validation[0].style.bottom ='40%';
                validation[0].style.display='block';
                
                break;
            case '12:00':
                validation[0].style.left ='37%';
                validation[0].style.bottom ='40%';
                validation[0].style.display='block';
                break;
            case '13:00':
                validation[1].style.left ='37%';
                validation[1].style.bottom ='37%';
                validation[1].style.display='block';
                break;
            case '15:00':
                validation[1].style.left ='37%';
                validation[1].style.bottom ='37%';
                validation[1].style.display='block';
                break;
            case '16:00':
                validation[2].style.left ='37%';
                validation[2].style.bottom ='30%';
                validation[2].style.display='block';
                break;
            case '18:00':
                validation[2].style.left ='37%';
                validation[2].style.bottom ='30%';
                validation[2].style.display='block';
                break;
            default:
                console.log('rien');
                break;
        }
   });

   for (let j = 0; j < close.length; j++) {
    close[j].addEventListener('click', function(){
        console.log("reservation[i]",reservation[i]);
        switch (reservation[i].value){
            case '10:00':
                validation[0].style.display='none';
                break;
            case '12:00':
                console.log("reservation[0]",validation[0]);
                validation[0].style.display='none';
                break;
            case '13:00':
                validation[1].style.display='none';
                break;
            case '15:00':
                validation[1].style.display='none';
                break;
            case '16:00':
                validation[2].style.display='none';
                break;
            case '18:00':
                validation[2].style.display='none';
                break;
            default:
                console.log('rien');
                break;
        }
   });
    
}
    
}