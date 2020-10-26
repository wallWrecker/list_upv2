console.log("Were in, Profile.php");
let data = [
    {
    id: 04133,
    name: "Josh",
    promo: "TM100X",
    amount: 100,
    status: "unpaid",
    date: "OCT / 22 / 2020",
    remarks: "The quick brown cat",
  },
  {
    id: 02233,
    name: "Jaime",
    promo: "TM50X",
    amount: 50,
    status: "paid",
    date: "OCT / 19 / 2020",
    remarks: "The quick brown fox",
  },
  {
    id: 04133,
    name: "Josh",
    promo: "TM100X",
    amount: 100,
    status: "unpaid",
    date: "OCT / 22 / 2020",
    remarks: "The quick brown cat",
  },

];

const filter_button = document.getElementsByClassName("filter-button");

let afterThead = document.querySelector("thead");

function createColumn(whatElement, data) {
  if (whatElement == "") {
    // create column <td> now.
    let td = document.createElement("td");
    let textnode = document.createTextNode(data);
    td.appendChild(textnode);
    return td;
  } else {
    let td = document.createElement("td");
    td.appendChild(whatElement);
    return td;
  }
}

let afterForm = document.querySelector("form");
function populateTable(someJsonData) {}

function createButton(data) {
  data.toUpperCase();
  let btn = document.createElement("button");
  let textnode = document.createTextNode(data);

  btn.onclick = function () {
    paidRecord(data);
  };
  
  btn.classList.add("button","is-text", "is-small");
  btn.appendChild(textnode);
  return btn;
}
// Trying out button.
afterForm.after(createButton("Hi I'm a button"));

// Example of how do data flow in to tables.
function laidOutToTable(data) {
  for (let item of data) {
    let ispaid = "" ;
    let table_row = document.createElement("tr");
    for (let prop in item) {
      if(item[prop] == "unpaid") {
        ispaid = "true";
      }
     
      let column = createColumn("", item[prop]);
      table_row.appendChild(column);

    }
    if (ispaid) {
      // let action = createColumn("button here");
      table_row.appendChild(document.createTextNode("I'm a text"));
    }
    afterThead.after(table_row);
  }
}

// createColumn test.
console.log(createColumn(createButton("Hello there")).childNodes);
laidOutToTable(data)