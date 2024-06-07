# EchoConnect

 ## Project Overview and Features
 ### Introduction

- Title: Realtime Messenger: Empowering Seamless Communication
- Brief Overview: Our project redefines communication with a powerful realtime messaging platform. Users can engage in dynamic conversations while admins maintain control and security.
### Key Features

- Realtime Chat: Instant messaging fosters fluid conversations between users.
- Admin Controls: Admins manage users, granting permissions, and assigning roles.
- Message Variety: Users exchange text, files, and emojis, enhancing interaction.
- User Autonomy: Users can delete messages and customize their profile with names, pictures, and passwords.
- User Visibility: All users are easily accessible for starting conversations.
### User Experience

- Intuitive Design: User-friendly interface ensures effortless navigation and a pleasant experience.
- Seamless Communication: Smooth messaging promotes productivity and collaboration.
- Personalization: Users can customize profiles to reflect their identities and preferences.
 ### Admin Management

- User Control: Admins efficiently manage users, adjusting permissions and roles as needed.
- Security Measures: Admin controls ensure a secure environment, safeguarding user data and interactions.
### Conclusion

- Recap: Realtime Messenger provides seamless communication with robust admin controls.
- Impact: Enhancing productivity, collaboration, and security in communication.
- Empowering Users: Providing autonomy and customization options for a tailored experience.

## Technology Stack

### Backend:
- **Framework:** Laravel
- **Frontend Integration:** React with Inertia
- **Authentication:** Laravel Breeze
- **Websockets:** Laravel Reverb
- **Utility:** UUID for generating unique identifiers
- **Server Environment:** XAMPP for local server setup
- **Dependency Management:** Composer for PHP dependencies

### Frontend:
- **UI Library:** Headless UI for accessible UI components
- **Icon Library:** Heroicons for a collection of icons
- **UI Framework:** DaisyUI for tailwindcss components
- **Emoji Picker:** emoji-picker-react for adding emojis to messages
- **Markdown Rendering:** react-markdown for rendering Markdown content
- **Dependency Management:** npm for managing JavaScript packages

### Development Environment:
- **IDE:** Visual Studio Code

## Running the Project
1. **Install PHP Dependencies:**
    ```bash
    composer install
    ```
2. **Install JavaScript Dependencies:**
    ```bash
    npm install
    ```
3. **Compile Assets:**
    ```bash
    npm run dev
    ```
4. **Start Laravel Reverb WebSocket Server:**
    ```bash
    php artisan reverb:start --debug
    ```
5. **Run the Application:**
    ```bash
    php artisan serve
    ```
## Team Members
- [MOHAMMED EL FAQYH](https://github.com/SIMOHAMMED22)
- [Mouad Abou Othmane](https://github.com/MouadAbouOthmane)
