use db;

CREATE TABLE questions(
    QuestionID int not null AUTO_INCREMENT,
    QuestionText TEXT(100) NOT NULL,
    AnswerText TEXT(100) NOT NULL,
    SubjectName TEXT(100) NOT NULL,
    PRIMARY KEY (QuestionID)
);

INSERT INTO questions(QuestionText, AnswerText, SubjectName)
VALUES("Wofür steht PCB?", "Printed Circuit Board", "IT-Tec"), ("Wofür steht RAM?", "Random Access Memory", "IT-Tec");  