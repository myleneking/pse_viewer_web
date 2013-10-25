CREATE TABLE stock_history (
    id              INT         NOT NULL    AUTO_INCREMENT ,
    name            VARCHAR(45) NOT NULL ,
    symbol          VARCHAR(10) NOT NULL ,
    percent_change  INT         NOT NULL ,
    volume          INT         NOT NULL ,
    currency        VARCHAR(5)  NOT NULL ,
    amount          INT         NOT NULL ,
    as_of           DATETIME    NOT NULL ,
    created_at      TIMESTAMP   NOT NULL ,
    PRIMARY KEY (`id`)
);