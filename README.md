# Metro Rail Ticket Management System

A comprehensive web-based application designed to streamline the ticketing process for urban metro rail services. This system provides distinct interfaces for passengers to book tickets, admins to manage infrastructure, and employees to handle ground-level operations.

---

## ## Features

### **Common Features (All Users)**

* **Authentication:** Secure Login, Registration, and Logout.
* **Account Recovery:** Forget Password and Change Password functionality.
* **Profile Management:** View and Update personal profile information.

### **Passenger Module**

* **Dashboard:** View current ticket details and active bookings.
* **Ticket Booking:** Search for routes, book tickets, and update booking details.
* **Journey History:** Maintain a log of past travels with the option to delete records.
* **Payment Records:** View transaction history and manage payment logs.

### **Admin Module**

* **System Overview:** A high-level dashboard displaying total users, revenue, and system health.
* **Fare & Route Management:** Manage metro stations, distances, and fare structures (View/Delete).
* **Staff Management:** Full CRUD operations for Employee accounts (Insert/View/Delete).

### **Employee Module**

* **Ticket Management:** Confirm pending bookings and process ticket cancellations.
* **Passenger Support:** Resolve booking conflicts and provide customer assistance.
* **Payment Handling:** Verify payment statuses and check transaction histories for security.

---

## ## Tech Stack

* **Frontend:** HTML5, CSS3 (Responsive Design).
* **Client-Side Validation:** JavaScript (Ensuring data integrity before submission).
* **Backend:** PHP (Server-side logic and session management).
* **Database:** MySQL (Relational database management).
* **Server:** XAMPP / WAMP (Apache Server).

---

## ## Database Architecture

The system utilizes a relational database to link passengers, employees, and administrative actions.

---

## ## Installation Guide

1. **Clone the Repository:**
```bash
git clone https://github.com/mehedisrabon/Metro_Ticket_Management_System.git

```


2. **Setup Database:**
* Download Xampp 
* Open **MySql**.
* Create a new database named `mydb`.
* Import the `mydb.sql` file provided in the project folder.


3. **Configure Connection:**
* Open `config.php` (or your connection file).
* Update the database credentials (host, username, password, and database name).


4. **Run the Project:**
* Move the project folder to your local server directory (e.g., `htdocs` for XAMPP).
* Open your browser and navigate to `http://localhost/metro-rail-management/`.



---
