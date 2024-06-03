function formatTime(date) {
  let hours = date.getHours();
  let minutes = date.getMinutes();
  let seconds = date.getSeconds();
  let period = hours >= 12 ? "PM" : "AM";

  hours = hours % 12;
  hours = hours ? hours : 12; // the hour '0' should be '12'

  // Add leading zeros to minutes and seconds if needed
  minutes = minutes < 10 ? "0" + minutes : minutes;
  seconds = seconds < 10 ? "0" + seconds : seconds;

  return `${hours} ${period} : ${minutes} : ${seconds}`;
}

const currentTime = new Date();
const formattedTime = formatTime(currentTime);
console.log(formattedTime);

// Output the formatted time to the web page
document.body.innerHTML = formattedTime;
