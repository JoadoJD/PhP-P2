CREATE TABLE 'gebruikers'  (
    'id' int(5) NOT NULL,
    'username' varchar(255) NOT NULL,
    'password' varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO 'gebruikers' ('id', 'username', 'password') VALUES
(1, 'admin', 'admin');