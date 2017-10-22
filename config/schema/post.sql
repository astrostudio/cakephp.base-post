
create table `post`(
    `id` bigint(20) not null,
    `parent_id` bigint(20),
    `lft` bigint(20),
    `rght` bigint(20),
    `head` text,
    `body` text,
    `slug` varchar(255),
    `type` varchar(64),
    `note` text,
    `start` datetime,
    `stop` datetime,
    `created` datetime,
    `modified` datetime,
    primary key (`id`)
);

create table `post_meta`(
    `post_id` bigint(20) not null,
    `name` varchar(128) not null,
    `body` text,
    `created` datetime,
    `modified` datetime,
    primary key (`post_id`,`name`),
    foreign key (`post_id`) references `post`(`id`) on delete cascade on update cascade
);

create table `post_locale`(
    `id` bigint(20) not null,
    `locale` varchar(6) not null,
    `head` text,
    `body` text,
    `created` datetime,
    `modified` datetime,
    primary key (`id`,`locale`),
    foreign key (`id`) references `post`(`id`) on delete cascade on update cascade
);

create table `post_meta_locale`(
    `post_id` bigint(20) not null,
    `name` varchar(128) not null,
    `locale` varchar(6) not null,
    `body` text,
    `created` datetime,
    `modified` datetime,
    primary key (`post_id`,`name`,`locale`),
    foreign key (`post_id`,`name`) references `post_meta`(`post_id`,`name`) on delete cascade on update cascade
);



