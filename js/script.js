let dynamicBtn = document.getElementsByClassName('dynamic-btn');
let dynamicText = document.getElementsByClassName('dynamic-text');
let dynamicImg = document.getElementsByClassName('dynamic-img');
let dynamicButton = document.getElementsByClassName('dynamic-button');
let shContent = document.getElementsByClassName('sh-content');
for (let index = 0; index < dynamicBtn.length; index++) {
    const element = dynamicBtn[index];
    element.addEventListener("click", ()=>{
       for (let i = 0; i < dynamicText.length; i++) {
            dynamicText[i].style.display='none';
            dynamicBtn[i].classList.remove("active");
            dynamicImg[i].style.display='none';
            dynamicImg[i].classList.add("ss");
           
       }
            dynamicImg[index].style.display='block';
            dynamicText[index].style.display='block';
            dynamicBtn[index].classList.add("active");
            dynamicImg[index].classList.add("ss");
        })
       
}

for (let index = 0; index < dynamicButton.length; index++) {
     const elements = dynamicButton[index];
     elements.addEventListener("click", ()=>{
        for (let i = 0; i < shContent.length; i++) {
          shContent[i].style.display='none';
             dynamicButton[i].classList.remove("active");
            
        }
          shContent[index].style.display='block';
          dynamicButton[index].classList.add("active");
         })
        
 }
