let data = [
  {
    id: 4133,
    name: "Josh",
    promo: "TM100X",
    amount: 100,
    status: "unpaid",
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
    status: "unpaid",
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

console.log("Were in, Profile.php");

initiateFilterButtons();

function initiateFilterButtons(type = "All unpaid") {
  const filter_buttons = document.getElementsByClassName("filter-button");
  // Check if all the filter buttons have is-dark class attached to them.
  Array.from(filter_buttons).forEach((element) => {
    if (element.classList.contains("is-dark") == true) {
      // let searchKey = element.innerHTML;
      // // Get data from ajax request
      // let basic_Ajax_Result = basicAjax(searchKey);

      // Call populate table
      populateTable(data);
    }
  });

  // Loop through all the button who have class filter-button
  for (let button_element of filter_buttons) {
    // Add click eventlistener.
    button_element.onclick = function () {
      triggerFilter(button_element, button_element.innerHTML);
    };
  }
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

// Example of how do data flow in to tables.
function populateTable(data) {
  let tbody = document.querySelector("thead");
  for (let item of data) {
    let ispaid = "";
    let table_row = document.createElement("tr");
    for (let property in item) {
      if (item[property] == "unpaid") {
        ispaid = "true";
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
  if (element.hasAttribute("data-active") == true) {
    return;
  }
  // Check if a button contains is-dark class
  let filter_buttons = document.getElementsByClassName("filter-button");
  Array.from(filter_buttons).forEach((ele) => {
    if (ele.classList.contains("is-dark")) {
      ele.classList.remove("is-dark");
      ele.removeAttribute("data-active");
    }
  });

  if (!element.classList.contains("is-dark")) {
    // add is-dark class to the element
    element.classList.add("is-dark", "active");
    // Set attribute for the current toggled button
    element.setAttribute("data-active", "true");
    // populate table function will called
    populateTable(data);
  }
}

function fetchData(whatData = "All Records", requestMethod = "GET", data) {
  if (requestMethod == "GET") {
  }
}
