# Master Data Management System (MDM)

A simple Laravel-based Master Data Management System using Blade, MySQL, and Bootstrap/Tailwind. This application supports user authentication and CRUD operations for brands, categories, and items.

---

## 🚀 Objective

Build a Laravel application that:

- Utilizes Blade templates for views.
- Provides full CRUD functionality.
- Supports user authentication.
- Implements a basic Role-Based Access Control (RBAC) system.
- Uses Bootstrap or Tailwind CSS for styling.

---

## 🧩 Database Design
# Tables:

 - Users: id, name, email, password, is_admin, created_at, updated_at
 - Master Brands: id, code, name, status, created_at, updated_at
 - Master Categories: id, code, name, status, created_at, updated_at
 - Master Items: id, brand_id, category_id, code, name, attachment, status, created_at, updated_at

---

## ✨ Features
✅ Master Data Management
# Brands
 - Create new brand with code, name 
 - List brands with pagination 
 - Edit brand details
 - Delete brand with confirmation modal

# Categories
 - Create new category with code, name 
 - List categories with pagination
 - Edit category details
 - Delete category with confirmation modal

# Items
 - Create new item with code, name, brand, category, file upload (default status: Active)
 - List items with pagination
 - Edit item (code, name, category, brand, attachment)
 - Delete item with confirmation modal

## 🔐 Role-Based Access Control (RBAC)
 - Users can only access their own data
 - Admins can view and manage all records
 - 
## ✅ Validation
 - Input validation for all forms
 - Display error messages for invalid inputs

---

## 🖼️ Screenshots
