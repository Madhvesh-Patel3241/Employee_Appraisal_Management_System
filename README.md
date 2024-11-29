# Employee_Appraisal_Management_System

The **Employee Appraisal Management System** is a simple and effective web-based tool designed to help companies evaluate employee performance based on their task accomplishments. This system has two types of users: **Admin** and **Employee**.

## Screenshot of the Project

### Login Page

![Screenshot 2023-05-06 090502](https://github.com/user-attachments/assets/ef867592-f7d9-43ab-87b7-86fafb408e18)


## Features

### Admin Side:
- Manage **departments** and **designations**.
- Add, edit, or delete **employee** records.
- Assign **tasks** to employees.
- Evaluate employees' performance based on task completion.
- Full access to stored data and the system's database.

### Employee Side:
- View assigned tasks.
- Submit progress on tasks.
- View personal task evaluations.

## Technologies Used

The project is built using the following technologies:

- **HTML / HTML5**: For structuring the frontend.
- **CSS / CSS3**: For designing the user interface.
- **Bootstrap 5**: To create a responsive and modern design.
- **JavaScript**: For dynamic client-side functionality.
- **PHP**: Server-side scripting language for backend development.
- **MySQL**: Database to store and manage data.

## Installation

Follow these steps to set up the project locally:

1. Clone the repository:
   
       git clone https://github.com/your-username/employee-appraisal-system.git

2. Navigate to the project folder:

       cd employee-appraisal-system

3. Set up the database:

   * Import the provided SQL file (database.sql) to create the necessary tables and data.
   * Update the database configuration in the config.php file with your database credentials.

4. Run the project:

   * You can run the project using a local server (e.g., XAMPP, WAMP) by placing the project files in the htdocs folder.

5. Access the system:

   * Admin login: /admin
   * Employee login: /employee

## How It Works

1. Admin can:

   * Manage departments and employee details.
   * Assign and evaluate employee tasks.
   * View reports on employee performance.

2. Employee can:

   * View tasks assigned by the admin.
   * Submit task progress for evaluation.

## Folder Structure

-/employee-appraisal-system
-│
-├── /assets                  # Contains CSS, JS, and images
-├── /admin                   # Admin-related files
-├── /employee                # Employee-related files
-├── /config                  # Database configuration
-├── /database                # SQL script for database setup
-├── /includes                # Common PHP files
-├── index.php                # Homepage and login page
-└── README.md                # This readme file


## Contributing

Contributions are welcome and greatly appreciated! If you'd like to contribute, please follow these steps:

   1. Fork the repository to your own GitHub account.
      
   2. Create a new branch with a descriptive name for the feature or bug fix:

     git checkout -b feature-branch-name

   3. Make your changes and commit them with clear, concise messages:

     git commit -m "Add feature or fix description"
   
   4. Push your branch to your forked repository:
 
     git push origin feature-branch-name
      
   5. Open a pull request to the main repository's master or main branch, and describe your changes in detail.

## Future Improvements

We have some exciting features planned for the future. Here’s a list of improvements and new functionalities that could be added:

   1. **Employee feedback system**: Allow employees to provide feedback on their tasks and evaluations.
   2. **Performance reports**: Generate detailed reports on employee performance over time.
   3. **Notifications**: Implement an email or in-app notification system to remind employees of upcoming deadlines and task submissions.
   4. **Multiple admin roles**: Allow for different levels of admin privileges (e.g., HR, Team Leader).
   5. **Task prioritization**: Add a feature where tasks can be prioritized by admins.

Feel free to suggest any additional features or improvements by opening an issue or a pull request.

