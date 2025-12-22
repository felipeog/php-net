CREATE TABLE
    users (
        id INT AUTO_INCREMENT PRIMARY KEY,
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
        name VARCHAR(255) NOT NULL,
        email VARCHAR(255) NOT NULL,
        UNIQUE INDEX users_email_idx (email)
    );

CREATE TABLE
    notes (
        id INT AUTO_INCREMENT PRIMARY KEY,
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
        body VARCHAR(255) NOT NULL,
        user_id INT NOT NULL,
        INDEX notes_user_id_idx (user_id),
        FOREIGN KEY (user_id) REFERENCES users (id) ON DELETE CASCADE
    );