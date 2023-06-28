
/* NAV toggle  */
const body = document.querySelector("body"),
      modeToggle = body.querySelector(".mode-toggle");
      sidebar = body.querySelector("nav");
      sidebarToggle = body.querySelector(".sidebar-toggle");

let getStatus = localStorage.getItem("status");
if(getStatus && getStatus ==="close"){
    sidebar.classList.toggle("close");
}

sidebarToggle.addEventListener("click", () => {
    sidebar.classList.toggle("close");
    if(sidebar.classList.contains("close")){
        localStorage.setItem("status", "close");
    }else{
        localStorage.setItem("status", "open");
    }
})


 // Lấy tất cả các hàng dữ liệu trong bảng
 var rows = document.querySelectorAll('.employee-table tbody tr');
  
 // Duyệt qua từng hàng dữ liệu
 rows.forEach(function(row) {
   // Tạo các nút Edit và Delete
   var editButton = document.createElement('button');
   editButton.textContent = 'Edit';
   var deleteButton = document.createElement('button');
   deleteButton.textContent = 'Delete';
   
   // Tạo một cột mới chứa các nút Action
   var actionColumn = document.createElement('td');
   actionColumn.appendChild(editButton);
   actionColumn.appendChild(deleteButton);
   
   // Thêm cột Action vào hàng
   row.appendChild(actionColumn);
 });
