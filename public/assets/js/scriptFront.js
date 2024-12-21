// The End Of Year Date To Countdown Date

document.addEventListener('DOMContentLoaded', () => {
    // Unix timestamp (in seconds) to count down to
    var toDayFromNow = (new Date("Dec 31, 2024 23:59:59").getTime() / 1000) + (3600 / 60 / 60 / 24) - 1;
    // Set Up FlipDown
    var flipdown = new FlipDown(toDayFromNow)

        // Start The Count Down
        .start()
        // Do Something When The Countdown Ends
        .ifEnded(() => {
            document.querySelector(".flipdown").innerHTML = `<h2>Timer is ended</h2>`;
        });
});


// Counter
// let count = document.querySelectorAll(".count")
// let arr = Array.from(count)

// arr.map(function(item){
//   let startnumber = 0

//   function counterup(){
//   startnumber++
//   item.innerHTML= startnumber

//   if(startnumber == item.dataset.number){
//       clearInterval(stop)
//   }
// }

// let stop =setInterval(function(){
//   counterup()
// },50)

// })

// Counter
let count = document.querySelectorAll(".count");
let arr = Array.from(count);

arr.map(function(item) {
    let startnumber = 0;
    let step = 100; // Increment step size

    function counterup() {
        startnumber += step; // Increment by step
        if (startnumber >= item.dataset.number) {
            startnumber = item.dataset.number; // Ensure it doesn't exceed the target number
            clearInterval(stop);
        }
        item.innerHTML = startnumber;
    }

    let stop = setInterval(function() {
        counterup();
    }, 50);
});
