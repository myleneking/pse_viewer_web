CREATE TABLE api_stocks (
    id              INT         NOT NULL    AUTO_INCREMENT ,
    name            VARCHAR(45) NOT NULL ,
    symbol          VARCHAR(10) NOT NULL ,
    percent_change  INT         NOT NULL ,
    volume          INT         NOT NULL ,
    price           INT         NOT NULL ,
    as_of           VARCHAR(45) NOT NULL ,
    watch_flg       INT         NOT NULL    DEFAULT 0 ,
    PRIMARY KEY (`id`)
);