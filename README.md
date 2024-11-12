# Gym Management System

This is a **Gym Management System** that allows users, coaches, and administrators to manage gym activities, memberships, schedules, and more. The system provides features for gym members to book sessions with coaches, track their progress, and get personalized recommendations.

## Features

- **User Management**: Sign-up, login, and user profile management.
- **Coach Profiles**: Coaches can be assigned to users, and users can book training sessions.
- **Training Sessions**: Coaches can manage training schedules for users.
- **Admin Dashboard**: Administrators can manage users, coaches, machines, and memberships.
- **Machine Management**: Administrators can manage gym machines and equipment.
- **Calendar & Scheduling**: Users and coaches can view and manage training sessions.

## Tech Stack

- **Frontend**: HTML, CSS, JavaScript, Symfony Twig Templates
- **Backend**: Symfony, PHP
- **Database**: MySQL
- **Authentication**: JWT for secure user login
- **Additional Libraries**: Bootstrap, AOS (for animations), Owl Carousel (for carousels)

## Installation

### Prerequisites

- PHP >= 8.0
- Composer (for dependency management)
- MySQL or any compatible database

### Step-by-Step Setup

1. **Clone the repository:**
    ```bash
    git clone https://github.com/Jvsxm-x/TRYIT.git
    ```

2. **Navigate to the project directory:**
    ```bash
    cd TRYIT
    ```

3. **Install dependencies:**
    ```bash
    composer install
    ```

4. **Set up the environment file:**
    Copy `.env.example` to `.env`:
    ```bash
    cp .env.example .env
    ```

5. **Set up your database:**
    Update your database configuration in the `.env` file (e.g., DB connection settings).

    Run the migrations to set up the database schema:
    ```bash
    php bin/console doctrine:migrations:migrate
    ```

6. **Load fixtures (optional):**
    You can load some dummy data to start using the app:
    ```bash
    php bin/console doctrine:fixtures:load
    ```

7. **Start the server:**
    If you're using Symfony's built-in server, you can run:
    ```bash
    symfony server:start
    ```

    Alternatively, you can set up a web server like Apache or Nginx to serve the app.

8. **Access the application:**
    Open your browser and visit `http://localhost:8000` to see the app in action.

## Usage

- **For Users:** Create an account, select a coach, and book training sessions.
- **For Coaches:** Coaches can manage their schedule and users' training sessions.
- **For Administrators:** Manage users, coaches, machines, and view reports.

## Contributing

We welcome contributions! If you'd like to help improve this project, please follow these steps:

1. Fork the repository.
2. Create a new branch (`git checkout -b feature-branch`).
3. Commit your changes (`git commit -am 'Add new feature'`).
4. Push to the branch (`git push origin feature-branch`).
5. Open a pull request.

## License

This project is licensed under the MIT License - see the [LICENSE.md](LICENSE.md) file for details.

## Contact

- **Your Name**: Jassem Chouat
- **Email**: chouatjasem@gmail.com
- **GitHub**: [https://github.com/jvsxm](https://github.com/jvsxm)
