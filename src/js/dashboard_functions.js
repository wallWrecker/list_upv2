// For Testing purposes so data variable is here..
let data = [
  {
    id: 4133,
    name: "Josh",
    promo: "TM100X",
    amount: 100,
    status: "paid",
    date: "OCT / 22 / 2020",
    remarks: "The quick brown cat",
  },
  {
    id: 2233,
    name: "Jaime",
    promo: "TM50X",
    amount: 50,
    status: "paid",
    date: "OCT / 19 / 2020",
    remarks: "The quick brown fox",
  },
  {
    id: 44133,
    name: "Josh",
    promo: "TM100X",
    amount: 100,
    status: "paid",
    date: "OCT / 22 / 2020",
    remarks: "The quick brown cat",
  },
  {
    id: 4133,
    name: "Josh",
    promo: "TM100X",
    amount: 100,
    status: "unpaid",
    date: "OCT / 22 / 2020",
    remarks: "The quick brown cat",
  },
];

const elements = document.getElementsByClassName("filter-button");

function initiateFilterButtons() {
  // Check if all the filter buttons have is-dark class attached to them.
  Array.from(elements).forEach((element) => {
    element.onclick = function () {
      triggerFilter(element);
    };

    if (element.classList.contains("is-dark") == true) {
      // let searchKey = element.innerHTML;
      // // Get data from ajax request
      // let basic_Ajax_Result = basicAjax(searchKey);
      // Call populate table
      element.add;
      populateTable(data);
    }
  });
}

function createColumn(whatElement, data) {
  if (whatElement == "") {
    // create column <td> now.
    const td = document.createElement("td");
    let textnode = document.createTextNode(data);
    td.appendChild(textnode);
    td.classList.add("is-vcentered");
    return td;
  } else {
    let td = document.createElement("td");
    td.classList.add("is-vcentered");
    td.appendChild(whatElement);
    return td;
  }
}

function createButton(data, disabled = "false") {
  let btn = document.createElement("button");
  let textnode = document.createTextNode(data);

  btn.onclick = function () {
    paidRecord(data);
  };

  btn.classList.add("button", "is-dark", "is-small");
  btn.appendChild(textnode);
  return btn;
}

// Defining tables body
const tableBody = document.querySelector("tbody");
// Example of how do data flow in to tables.

function populateTable(data) {
  // Check if the 
  // if(table.haveAllReadyGotContents == true) {
  //   // Remove content of the tableBody

  // }
  let tbody = document.querySelector("tbody");
  for (let item of data) {
    let ispaid = "";
    let table_row = document.createElement("tr");
    for (let property in item) {
      if (item[property] == "unpaid") {
        ispaid = true;
      }
      let column = createColumn("", item[property]);
      table_row.appendChild(column);
    }

    if (ispaid) {
      // let action = createColumn("button here");
      let hiButton = createButton("Paid Me");
      table_row.appendChild(createColumn(hiButton));
    }
    tbody.appendChild(table_row);
  }
}

function triggerFilter(element) {
  if (element.classList.contains("is-dark") == true) {
    return;
  }

  let filter_buttons = document.getElementsByClassName("filter-button");
  Array.from(filter_buttons).forEach((ele) => {
    // Check if a button contains is-dark class
    if (ele.classList.contains("is-dark")) {
      ele.classList.remove("is-dark");
      ele.removeAttribute("data-active");
    }
  });

  if (!element.classList.contains("is-dark")) {
    // add is-dark class o the element
    element.classList.addt("is-dark", "active");
    // Set attribute for the current toggled button
    element.setAttribute("data-active", "true");
    // Call to change header.
    updateHeader(element.innerHTML);
    // populate table function will called
    populateTable(data);
  }
}

function updateHeader(data) {
  const header = document.querySelector("#header-type");
  let string = typeof data != "string" ? String(data) : data;
  header.innerHTML = string;
  return header;
}

// Fetches(GET) data from a server
function getData() {}
function ajaxFunction(url, requestMethod) {
  const xhr = new XMLHttpRequest();
  xhr.open(requestMethod, url);
  xhr.setRequestHeader();
}

function verifyFormData() {
  let name = document.getElementById("name");
  let load_type = document.getElementById("load-type");
  let amount = document.getElementById("amount");
  let unpaid = document.getElementById("unpaid");
  let paid = document.getElementById("paid");
  let date = document.getElementById("date");
}

function verifySearchData(searchKey) {}

const randomFormInfo = function (element) {};

export { initiateFilterButtons as default };
// export * from "./dashboard_functions.js";

if (8 <= 120) {
  console.log();
}
