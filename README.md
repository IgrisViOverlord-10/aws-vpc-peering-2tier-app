# 🔐 Secure Two-Tier AWS Architecture with VPC Peering

## 📌 Project Overview

Designed a secure two-tier web application by separating the web and database layers across different VPCs, enabling private communication and improved security using VPC Peering.

---

## ❓ Why This Approach?

* Ensures strong **network isolation** between application and database
* Enables **private communication** without internet exposure
* Prevents direct public access to the database
* Reflects **real-world production architecture design**

---

## 💻 Tech Stack

AWS EC2, Amazon RDS (MySQL), Amazon VPC, VPC Peering, Nginx, PHP-FPM

---

## 🏗 Architecture Flow

Client → EC2 (Nginx + PHP) → VPC Peering → RDS MySQL (Private) → Response

---

## ⚙️ Implementation Summary

* Created separate **Web VPC** and **DB VPC**
* Configured public and private subnets
* Established **VPC Peering connection**
* Updated route tables for cross-VPC communication
* Deployed EC2 with **Nginx + PHP-FPM**
* Created **private RDS instance (no public access)**
* Applied **security group restrictions**

---

## 🛠 Implementation Steps

* Launch EC2 in public subnet (Web VPC)
* Install Nginx, PHP-FPM, MySQL client
* Configure Nginx to process PHP
* Create RDS MySQL in private subnet (DB VPC)
* Set up VPC Peering and update route tables
* Configure security groups (EC2 → HTTP/SSH, RDS → MySQL from Web VPC)
* Connect application to database and test

---

## 🔐 Security & Considerations

* RDS is **private (no public access)**
* DB access restricted via **security groups**
* SSH limited to specific IP
* Communication stays within **AWS private network**
* Limitation: Single EC2 instance (no HA / Auto Scaling)

---

## 🚀 Key Outcomes

* Implemented secure **cross-VPC communication**
* Built a fully functional **dynamic web application**
* Strengthened understanding of **VPC Peering & routing**
* Applied **real-world cloud architecture principles**

---

## 📂 Repository Files

* `index.php` – Application logic
* `database.sql` – DB schema
* `Snapshots.pdf` – Deployment screenshots 
* `recordings.zip` – Insert & Delete operation demos
* `README.md` – Project documentation

---

## 📸 Snapshots Include

*(Snapshots.pdf contains the following in order)*

1. Web VPC configuration
2. DB VPC configuration
3. EC2 instance (Web Server) details
4. RDS MySQL instance (private, no public access)
5. VPC Peering connection (Requester & Acceptor)
6. Security Groups
   * EC2 (SSH, HTTP)
   * RDS (MySQL from Web VPC)
7. Database and table creation (MySQL)
8. CRUD operations performed (Insert, Update, Delete verification)
9. Final web application output

---

## 🎥 Recordings

* Insert operation (data added to database)
* Delete operation (data removed from database)

---
