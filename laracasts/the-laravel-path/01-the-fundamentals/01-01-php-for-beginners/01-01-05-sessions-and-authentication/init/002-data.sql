INSERT INTO
    users (email, password)
VALUES
    (
        'firstuser@example.com',
        '$2y$10$NNuq2V.Fihhwrdhi2Y7yhOMytaByC2KxMhOf6P8zZfn6d4987/ocu'
    ),
    (
        'seconduser@example.com',
        '$2y$10$NNuq2V.Fihhwrdhi2Y7yhOMytaByC2KxMhOf6P8zZfn6d4987/ocu'
    );

INSERT INTO
    notes (body, user_id)
VALUES
    ('First User First Note', 1),
    ('First User Second Note', 1),
    ('Second User First Note', 2),
    ('Second User Second Note', 2);