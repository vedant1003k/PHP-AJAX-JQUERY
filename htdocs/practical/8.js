// Function to check if input is a string
function isString(input) {
  return typeof input === "string";
}

// Function to check if a string is blank
function isBlank(str) {
  return !str.trim();
}

// Function to split a string into an array of words
function stringToArray(str) {
  return str.split(" ");
}

// Function to remove specified number of characters from a string
function truncateString(str, num) {
  return str.slice(0, num);
}

// Function to convert a string into abbreviated form (e.g., "Robin Singh" to "Robin S.")
function abbrevName(str) {
  var parts = str.split(" ");
  if (parts.length > 1) {
    return parts[0] + " " + parts[1].charAt(0) + ".";
  } else {
    return str;
  }
}

// Function to hide email addresses to protect from unauthorized users
function protectEmail(email) {
  var parts = email.split("@");
  var username = parts[0];
  var hiddenUsername = username.substring(0, 5) + "...";
  return hiddenUsername + "@" + parts[1];
}

// Function to parameterize a string (replace spaces and non-alphanumeric characters with hyphens)
function parameterizeString(str) {
  return str
    .toLowerCase()
    .replace(/[^a-z0-9]+/g, "-")
    .replace(/^-+|-+$/g, "");
}

// Function to capitalize the first letter of a string
function capitalizeFirstLetter(str) {
  return str.charAt(0).toUpperCase() + str.slice(1);
}

// Function to capitalize the first letter of each word in a string
function capitalizeWords(str) {
  return str.replace(/\b\w/g, function (char) {
    return char.toUpperCase();
  });
}

// Testing the functions
console.log(isString("Graphic era University")); // true
console.log(isString([1, 2, 4, 0])); // false

console.log(isBlank("")); // true
console.log(isBlank("abc")); // false

console.log(stringToArray("Robin Singh")); // ["Robin", "Singh"]

console.log(truncateString("Robin Singh", 4)); // "Robi"

console.log(abbrevName("Robin Singh")); // "Robin S."

console.log(protectEmail("robin_singh@example.com")); // "robin...@example.com"

console.log(parameterizeString("Robin Singh from INDIA.")); // "robin-singh-from-india"

console.log(capitalizeFirstLetter("js string exercises")); // "Js string exercises"

console.log(capitalizeWords("js string exercises")); // "Js String Exercises"
