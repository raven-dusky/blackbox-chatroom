# Blackbox

**Blackbox** is a terminal-style chatroom application built with Laravel. It offers real-time encrypted messaging in a minimalist retro interface using [terminal.css](https://terminalcss.xyz).

## Features

- 🔐 **Authentication** powered by Laravel Fortify
- ⚡ **Real-time chat** using Laravel Livewire
- 🔒 **End-to-end encryption** for messages
- 📝 **User registration** with instant access to the chatroom
- 🧾 **Rules section** for community guidelines
- 👤 **User profile** with:
  - Profile picture upload
  - Role display (user/moderator)
  - Total messages sent

### Moderator Tools

- Moderators can:
  - Delete user messages
  - Ban users from the chat
- Admins can promote any user to moderator using the command:
  ```bash
  php artisan app:make-user-moderator {id}

## Setup
```bash
git clone https://github.com/your-username/blackbox.git
cd blackbox
composer install
npm install
cp .env.example .env
php artisan key:generate
php artisan migrate:fresh --seed
