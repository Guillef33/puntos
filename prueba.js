function lookUpProfile(name, prop) {
    // Only change code below this line
    for (let i = 0; i < contacts.lenght; i++) {
      if (contacts[i].firstName === name ) {
        if (contacts[i].hasOwnProperty(prop)) {
          return contacts[i][prop];
        } else {
          return "No such property"
        }
      }
    }
      return "No such contact";
  }

  function lookUpProfile(name, prop) {

  for (let x = 0; x < contacts.length; x++) {
    if (contacts[x].firstName === name) {
      if (contacts[x].hasOwnProperty(prop)) {
        return contacts[x][prop];
      } else {
        return "No such property";
      }
    }
  }
  return "No such contact";
}