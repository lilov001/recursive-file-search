INSERT INTO node
    (id, parent_id, name, type)
VALUES
    (1, 0, 'C:', 'folder'),
    (2, 1, 'Documents', 'folder'),
    (3, 2, 'Images', 'folder'),
    (4, 3, 'Image1.jpg', 'file'),
    (5, 3, 'Image2.jpg', 'file'),
    (6, 3, 'Image3.jpg', 'file'),
    (7, 2, 'Works', 'folder'),
    (8, 7, 'Letter.doc', 'file'),
    (9, 7, 'Accountant', 'folder'),
    (10, 9, 'Accounting.xls', 'file'),
    (11, 9, 'AnnualReport.xls', 'file'),
    (12, 1, 'Program Files', 'folder'),
    (13, 12, 'Skype', 'folder'),
    (14, 13, 'Skype.exe', 'file'),
    (15, 13, 'Readme.txt', 'file'),
    (16, 12, 'Mysql', 'folder'),
    (17, 16, 'Mysql.exe', 'file'),
    (18, 16, 'Mysql.com', 'file')
