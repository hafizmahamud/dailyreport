# 🗓️ Daily Report System

A simple yet effective **Daily Report Management System** to help individuals or teams log daily tasks and activities.  
This project is designed to centralize daily reporting and later generate performance review documents for weekly or monthly reporting.

---

## 🚀 Features

- 📋 **Report List** – View all daily reports at a glance.  
- ✍️ **New Report** – Add a new task or activity report.  
- 🔍 **Show Report** – View detailed information for a specific report.  
- ⚙️ **Basic CRUD Operations** – Create, read, update, and delete reports.

Each report includes:
- **Task Name**  
- **Project Name**  
- **Time Spent**  
- **Status**



![Report List Page](./storage/app/public/images/DailyReport%20-%20Report%20List.png)
![Report List Page](./storage/app/public/images/DailyReport%20-%20Report%20Details.png)
![Report List Page](./storage/app/public/images/DailyReport%20-%20New%20Report.png)
---

## 🎯 Purpose

The goal of this project is to provide a single, integrated platform for tracking daily tasks and performance.  
Eventually, users will be able to:
- Generate **weekly or monthly summaries**  
- Use reports for **performance reviews** and **progress tracking**

---

## 🧩 Tech Stack

- **Backend:** Laravel  
- **Database:** MySQL  
- **Frontend:** Blade Templates / Tailwind CSS  
- **Server:** Local

---

## 🧪 Current Functionality

✅ Basic CRUD for daily reports  
❌ No authentication (yet)  
❌ No export features (yet)

---

## 🛠️ Upcoming Features

Planned enhancements include:
- 👥 **User Management** – Add user accounts and roles.  
- 📄 **Export to PDF** – Generate printable weekly or monthly performance reports.  
- 📊 **Dashboard Overview** – Summary charts and insights. That would show how many hours for a person have taken through a weeks.  
- 📆 **Date Range Filter** – Filter reports by custom periods.

---

## 🧰 Installation

1. Clone the repository:
   ```bash
   git clone https://github.com/hafizmahamud/dailyreport.git

2. Navigate to the project directory:
   ```bash
    cd daily-report-system

3. Install dependencies:
   ```bash
    composer install
    npm install && npm run dev

4. Set up your .env file:
   ```bash
    cp .env.example .env
    php artisan key:generate

5. Run migrations:
   ```bash
    php artisan migrate

6. Start the development server:
   ```bash
    php artisan serve
