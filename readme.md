# **Ciapp: All-in-One Personal Productivity Suite**

**A Lightweight Web Tool for Organizing Thoughts, Learning, and Daily Tasks**

---

## **Project Overview**

Ciapp is a comprehensive web application designed to empower
users to manage their personal and professional lives efficiently.
Combining **note-taking**, **flashcard-based
learning**, and **task management** into
a single intuitive platform, Ciapp offers a minimalist yet
powerful alternative to tools like Notion. Built with PHP and modern
web technologies, it prioritizes simplicity, speed, and ease of use
while maintaining scalability for future enhancements.

### **Core Objectives**

1. **Centralize Productivity
   Tools**: Eliminate app-switching by integrating notes,
   learning aids, and task management.

2. **Enhance Personal Growth**:
   Facilitate language learning, exam preparation, and creative
   thinking through customizable flashcards.

3. **Streamline Daily
   Workflows**: Simplify task scheduling, calendar integration,
   and progress tracking.

4. **Ensure Privacy &
   Accessibility**: A self-hosted solution for users who value
   data ownership and offline access.

---

## **Key Features**

- **Categorization**:
   Organize notes by tags, categories, or custom folders.

- **Search Functionality**:
   Quickly retrieve notes using keywords or filters.

- **Date-Stamped Entries**:
   Automatically track when notes are created or modified.

- **Save/Review**: 
  Easy to save searched vocabulary into flashcard deck

- **To-Do Lists & CalendarSync**: 
  Schedule tasks with due dates, reminders, and priority levels.

---

## **Technology Stack**

- **Backend**: PHP 8.4.5,
   MariaDB 10.11.7, Apache 2.4.63.1, WampServer 3.3.7

- **Frontend**: HTML5,
   CSS3 (Bootstrap), JavaScript (jQuery)

- **Additional Tools**:
   Composer, NPM

- **Server Requirements**:
   Apache, PHP 8.4, SSL/TLS for secure
   deployment

---

## **Installation Guidelines**

### **Prerequisites**

- Web server (Apache/Nginx
   recommended)

- PHP 8.0 or higher

- MySQL/MariaDB database

- Composer (for dependency
   management)

### **Setup Steps**

1. **Clone the Repository**
   
   git clone /directory/of/this/repo

2. **Install Dependencies**
   
   composer install  
   npm install

3. **Configure the Database**
   
   Create a MySQL database and user.
   
   Import the provided SQL schema
     (`database/ciapptest_schema.sql`).
   
   For the lds scripture check github mormon-documentation-project
   For the dictionary check github matthewreagan/WebstersEnglishDictionary
   
   Update config files
     `application/config/config.php`
   
     `application/config/database.php`

4. **Google auth Setup and Run**
   
   update `secure/client_secret.json`

---

## **Future Enhancements**

- **Mobile App Integration**:
   Develop cross-platform mobile clients using Flutter/React Native.

- **Collaboration Features**:
   Shared notes, group tasks, and real-time editing.

- **AI-Powered Insights**:
   Suggest task prioritization or generate flashcards from notes.

- **Third-Party Integrations**:
   Sync with Google Calendar, Notion, or productivity APIs.

---

## **License**

Ciapp is open-source under the [MIT License](https://chat.deepseek.com/a/chat/s/LICENSE.md).

---

## **Contact**

For inquiries, partnerships, or contributions, contact:  

- Email: peter.bond40@gmail.com

- GitHub: [https://github.com/ziqiangy](https://github.com/ziqiangy)

---

## **Additional Information**

The template of this project is by using [pocketarc/codeigniter](https://github.com/pocketarc/codeigniter) which is a CI3 fork compatible with PHP8.4, here is more information from pocketarc:

########################
What is this repository?
########################

This is a fork of CodeIgniter 3, with the goal of keeping it up to date with **PHP 8.4** and beyond. There is no intention to add new features or change the way CI3 works. This is purely a maintenance fork.

The original CodeIgniter 3.x branch is no longer maintained, and has not been updated to work with PHP 8.2, or any newer version. This fork is intended to fill that gap.

If the original CodeIgniter 3.x branch is updated to work with PHP 8.2+, and starts to be maintained again, this fork might be retired.

****************

Issues and Pulls

****************

Issues and Pull Requests are welcome, but please note that this is a maintenance fork. New features will not be accepted. If you have a new feature you would like to see in CodeIgniter, please submit it to the original CodeIgniter 3.x branch.

*******************

Server Requirements

*******************

PHP version 5.4 or newer, same as the original CI3 requirements.

************

Installation

************

Simple: Just use composer.

.. code-block:: bash

    composer require pocketarc/codeigniter