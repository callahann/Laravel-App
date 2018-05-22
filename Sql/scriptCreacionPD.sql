/*==============================================================*/
/* DBMS name:      PostgreSQL 9.x                               */
/* Created on:     26-05-2017 3:31:33                           */
/*==============================================================*/


drop index if exists HEREDA_A2_FK;

drop index if exists BINGOS_PK;

drop table if exists BINGOS cascade;

drop index if exists GESTIONA__FK;

drop index if exists CATASTROFES_PK;

drop table if exists CATASTROFES cascade;

drop index if exists REALIZA_FK;

drop index if exists SOBRE_FK;

drop index if exists COMENTARIOS_PK;

drop table if exists COMENTARIOS cascade;

drop index if exists PERTENECE_FK;

drop index if exists COMUNAS_PK;

drop table if exists COMUNAS cascade;

drop index if exists HEREDA_A4_FK;

drop index if exists DONACIONES_PK;

drop table if exists DONACIONES cascade;

drop index if exists TIENE_FK;

drop index if exists ELEMENTOS_PK;

drop table if exists ELEMENTOS cascade;

drop index if exists LOGS_PK;

drop table if exists LOGS cascade;

drop index if exists TRATA_FK;

drop index if exists MEDIDAS_PK;

drop table if exists MEDIDAS cascade;

drop index if exists OCURRE2_FK;

drop index if exists OCURRE_FK;

drop index if exists OCURRE_PK;

drop table if exists OCURRE cascade;

drop index if exists HEREDA_A_FK;

drop index if exists RECOLECCIONES_PK;

drop table if exists RECOLECCIONES cascade;

drop index if exists REGIONES_PK;

drop table if exists REGIONES cascade;

drop index if exists TIPO_USUARIOS_PK;

drop table if exists TIPO_USUARIOS cascade;

drop index if exists GESTIONA_FK;

drop index if exists TIENE__FK;

drop index if exists REGISTRA_A_FK;

drop index if exists USUARIOS_PK;

drop table if exists USUARIOS cascade;

drop index if exists HEREDA_A3_FK;

drop index if exists VOLUNTARIADOS_PK;

drop table if exists VOLUNTARIADOS cascade;

/*==============================================================*/
/* Table: BINGOS                                                 */
/*==============================================================*/
create table BINGOS (
   ID_MED               INT4                 not null,
   ID_BINGOS             SERIAL               not null,
   ID_CATAS             INT4                 null,
   APROBACION_MEDIDAS    BOOL                 null,
   PROGRESO             INT4                 null,
   FECHA_INICIO         DATE                 null,
   FECHA_TERMINO        DATE                 null,
   LUGAR_BINGOS          VARCHAR(50)          null,
   MONTO_BINGOS          INT4                 null,
   ACTIVIDAD            VARCHAR(100)         null,
   META_BINGOS           INT4                 null,
   constraint PK_BINGOS primary key (ID_MED, ID_BINGOS)
);

/*==============================================================*/
/* Index: BINGOS_PK                                              */
/*==============================================================*/
create unique index BINGOS_PK on BINGOS (
ID_MED,
ID_BINGOS
);

/*==============================================================*/
/* Index: HEREDA_A2_FK                                          */
/*==============================================================*/
create  index HEREDA_A2_FK on BINGOS (
ID_MED
);

/*==============================================================*/
/* Table: CATASTROFES                                            */
/*==============================================================*/
create table CATASTROFES (
   ID_CATAS             SERIAL               not null,
   ID_USER              INT4                 not null,
   TIPO_CATAS           VARCHAR(20)          null,
   NOMBRE_CATAS         VARCHAR(10)          null,
   DESCRIPCION_C        VARCHAR(100)         null,
   constraint PK_CATASTROFES primary key (ID_CATAS)
);

/*==============================================================*/
/* Index: CATASTROFES_PK                                         */
/*==============================================================*/
create unique index CATASTROFES_PK on CATASTROFES (
ID_CATAS
);

/*==============================================================*/
/* Index: GESTIONA__FK                                          */
/*==============================================================*/
create  index GESTIONA__FK on CATASTROFES (
ID_USER
);

/*==============================================================*/
/* Table: COMENTARIOS                                            */
/*==============================================================*/
create table COMENTARIOS (
   ID                   SERIAL               not null,
   ID_MED               INT4                 null,
   ID_USER              INT4                 null,
   DESCRIPCION          VARCHAR(1024)        null,
   FECHA                DATE                 null,
   HORA                 TIME                 null,
   constraint PK_COMENTARIOS primary key (ID)
);

/*==============================================================*/
/* Index: COMENTARIOS_PK                                         */
/*==============================================================*/
create unique index COMENTARIOS_PK on COMENTARIOS (
ID
);

/*==============================================================*/
/* Index: SOBRE_FK                                              */
/*==============================================================*/
create  index SOBRE_FK on COMENTARIOS (
ID_MED
);

/*==============================================================*/
/* Index: REALIZA_FK                                            */
/*==============================================================*/
create  index REALIZA_FK on COMENTARIOS (
ID_USER
);

/*==============================================================*/
/* Table: COMUNAS                                                */
/*==============================================================*/
create table COMUNAS (
   NOMBRE_COM           VARCHAR(10)          null,
   ID_COMUNAS            SERIAL               not null,
   NUMERO_REG           INT4                 null,
   constraint PK_COMUNAS primary key (ID_COMUNAS)
);

/*==============================================================*/
/* Index: COMUNAS_PK                                             */
/*==============================================================*/
create unique index COMUNAS_PK on COMUNAS (
ID_COMUNAS
);

/*==============================================================*/
/* Index: PERTENECE_FK                                          */
/*==============================================================*/
create  index PERTENECE_FK on COMUNAS (
NUMERO_REG
);

/*==============================================================*/
/* Table: DONACIONES                                              */
/*==============================================================*/
create table DONACIONES (
   ID_MED               INT4                 not null,
   ID_DONACIONES          SERIAL               not null,
   ID_CATAS             INT4                 null,
   APROBACION_MEDIDAS    BOOL                 null,
   PROGRESO             INT4                 null,
   FECHA_INICIO         DATE                 null,
   FECHA_TERMINO        DATE                 null,
   MONTO_DON            INT4                 null,
   CUENTA               INT4                 null,
   META                 INT4                 null,
   constraint PK_DONACIONES primary key (ID_MED, ID_DONACIONES)
);

/*==============================================================*/
/* Index: DONACIONES_PK                                           */
/*==============================================================*/
create unique index DONACIONES_PK on DONACIONES (
ID_MED,
ID_DONACIONES
);

/*==============================================================*/
/* Index: HEREDA_A4_FK                                          */
/*==============================================================*/
create  index HEREDA_A4_FK on DONACIONES (
ID_MED
);

/*==============================================================*/
/* Table: ELEMENTOS                                              */
/*==============================================================*/
create table ELEMENTOS (
   ID_ELEMENTOS          SERIAL               not null,
   ID_MED               INT4                 null,
   ID_RECOLECCIONES       INT4                 null,
   NOMBRE_ELEM          VARCHAR(20)          null,
   constraint PK_ELEMENTOS primary key (ID_ELEMENTOS)
);

/*==============================================================*/
/* Index: ELEMENTOS_PK                                           */
/*==============================================================*/
create unique index ELEMENTOS_PK on ELEMENTOS (
ID_ELEMENTOS
);

/*==============================================================*/
/* Index: TIENE_FK                                              */
/*==============================================================*/
create  index TIENE_FK on ELEMENTOS (
ID_MED,
ID_RECOLECCIONES
);

/*==============================================================*/
/* Table: LOGS                                                   */
/*==============================================================*/
create table LOGS (
   ID_LOGS               SERIAL               not null,
   FECHA                DATE                 null,
   HORA                 TIME                 null,
   ACCION               VARCHAR(50)          null,
   constraint PK_LOGS primary key (ID_LOGS)
);

/*==============================================================*/
/* Index: LOGS_PK                                                */
/*==============================================================*/
create unique index LOGS_PK on LOGS (
ID_LOGS
);

/*==============================================================*/
/* Table: MEDIDAS                                                */
/*==============================================================*/
create table MEDIDAS (
   ID_MED               SERIAL               not null,
   ID_CATAS             INT4                 null,
   APROBACION_MEDIDAS    BOOL                 null,
   PROGRESO             INT4                 null,
   FECHA_INICIO         DATE                 null,
   FECHA_TERMINO        DATE                 null,
   constraint PK_MEDIDAS primary key (ID_MED)
);

/*==============================================================*/
/* Index: MEDIDAS_PK                                             */
/*==============================================================*/
create unique index MEDIDAS_PK on MEDIDAS (
ID_MED
);

/*==============================================================*/
/* Index: TRATA_FK                                              */
/*==============================================================*/
create  index TRATA_FK on MEDIDAS (
ID_CATAS
);

/*==============================================================*/
/* Table: OCURRE                                                */
/*==============================================================*/
create table OCURRE (
   ID_CATAS             INT4                 not null,
   ID_COMUNAS            INT4                 not null,
   constraint PK_OCURRE primary key (ID_CATAS, ID_COMUNAS)
);

/*==============================================================*/
/* Index: OCURRE_PK                                             */
/*==============================================================*/
create unique index OCURRE_PK on OCURRE (
ID_CATAS,
ID_COMUNAS
);

/*==============================================================*/
/* Index: OCURRE_FK                                             */
/*==============================================================*/
create  index OCURRE_FK on OCURRE (
ID_CATAS
);

/*==============================================================*/
/* Index: OCURRE2_FK                                            */
/*==============================================================*/
create  index OCURRE2_FK on OCURRE (
ID_COMUNAS
);

/*==============================================================*/
/* Table: RECOLECCIONES                                           */
/*==============================================================*/
create table RECOLECCIONES (
   ID_MED               INT4                 not null,
   ID_RECOLECCIONES       SERIAL               not null,
   LUGAR_REC            VARCHAR(50)          null,
   ID_CATAS             INT4                 null,
   APROBACION_MEDIDAS    BOOL                 null,
   PROGRESO             INT4                 null,
   FECHA_INICIO         DATE                 null,
   FECHA_TERMINO        DATE                 null,
   CANT_ELEM_ACTUAL     INT4                 null,
   CANT_ELEM_META       INT4                 null,
   constraint PK_RECOLECCIONES primary key (ID_MED, ID_RECOLECCIONES)
);

/*==============================================================*/
/* Index: RECOLECCIONES_PK                                        */
/*==============================================================*/
create unique index RECOLECCIONES_PK on RECOLECCIONES (
ID_MED,
ID_RECOLECCIONES
);

/*==============================================================*/
/* Index: HEREDA_A_FK                                           */
/*==============================================================*/
create  index HEREDA_A_FK on RECOLECCIONES (
ID_MED
);

/*==============================================================*/
/* Table: REGIONES                                                */
/*==============================================================*/
create table REGIONES (
   NUMERO_REG           INT4                 not null,
   NOMBRE_REG           VARCHAR(15)          null,
   constraint PK_REGIONES primary key (NUMERO_REG)
);

/*==============================================================*/
/* Index: REGIONES_PK                                             */
/*==============================================================*/
create unique index REGIONES_PK on REGIONES (
NUMERO_REG
);

/*==============================================================*/
/* Table: TIPO_USUARIOS                                          */
/*==============================================================*/
create table TIPO_USUARIOS (
   ID_TIPO              SERIAL               not null,
   NOMBRE_TIPO          VARCHAR(20)          null,
   DESCRIPCION_TIPO     VARCHAR(100)         null,
   PERMISOS             VARCHAR(500)         null,
   constraint PK_TIPO_USUARIOS primary key (ID_TIPO)
);

/*==============================================================*/
/* Index: TIPO_USUARIOS_PK                                       */
/*==============================================================*/
create unique index TIPO_USUARIOS_PK on TIPO_USUARIOS (
ID_TIPO
);

/*==============================================================*/
/* Table: USUARIOS                                               */
/*==============================================================*/
create table USUARIOS (
   ID_USER              SERIAL               not null,
   ID_TIPO              INT4                 null,
   ID_LOGS               INT4                 null,
   ID_MED               INT4                 null,
   NOMBRE_USER          VARCHAR(20)          null,
   CLAVE                VARCHAR(20)          null,
   BLOQUEO_USER         BOOL                 null,
   constraint PK_USUARIOS primary key (ID_USER)
);

/*==============================================================*/
/* Index: USUARIOS_PK                                            */
/*==============================================================*/
create unique index USUARIOS_PK on USUARIOS (
ID_USER
);

/*==============================================================*/
/* Index: REGISTRA_A_FK                                         */
/*==============================================================*/
create  index REGISTRA_A_FK on USUARIOS (
ID_LOGS
);

/*==============================================================*/
/* Index: TIENE__FK                                             */
/*==============================================================*/
create  index TIENE__FK on USUARIOS (
ID_TIPO
);

/*==============================================================*/
/* Index: GESTIONA_FK                                           */
/*==============================================================*/
create  index GESTIONA_FK on USUARIOS (
ID_MED
);

/*==============================================================*/
/* Table: VOLUNTARIADOS                                          */
/*==============================================================*/
create table VOLUNTARIADOS (
   ID_MED               INT4                 not null,
   ID_VOLUNTARIADOS      SERIAL               not null,
   ID_CATAS             INT4                 null,
   APROBACION_MEDIDAS    BOOL                 null,
   PROGRESO             INT4                 null,
   FECHA_INICIO         DATE                 null,
   FECHA_TERMINO        DATE                 null,
   TIPO_VOL             VARCHAR(20)          null,
   CANT_PERSONAS_ACTUAL INT4                 null,
   CANT_PERSONAS_ESPERADAS INT4                 null,
   constraint PK_VOLUNTARIADOS primary key (ID_MED, ID_VOLUNTARIADOS)
);

/*==============================================================*/
/* Index: VOLUNTARIADOS_PK                                       */
/*==============================================================*/
create unique index VOLUNTARIADOS_PK on VOLUNTARIADOS (
ID_MED,
ID_VOLUNTARIADOS
);

/*==============================================================*/
/* Index: HEREDA_A3_FK                                          */
/*==============================================================*/
create  index HEREDA_A3_FK on VOLUNTARIADOS (
ID_MED
);

alter table BINGOS
   add constraint FK_BINGOS_HEREDA_A2_MEDIDAS foreign key (ID_MED)
      references MEDIDAS (ID_MED)
      on delete restrict on update restrict;

alter table CATASTROFES
   add constraint FK_CATASTRO_GESTIONA__USUARIOS foreign key (ID_USER)
      references USUARIOS (ID_USER)
      on delete restrict on update restrict;

alter table COMENTARIOS
   add constraint FK_COMENTAR_REALIZA_USUARIOS foreign key (ID_USER)
      references USUARIOS (ID_USER)
      on delete restrict on update restrict;

alter table COMENTARIOS
   add constraint FK_COMENTAR_SOBRE_MEDIDAS foreign key (ID_MED)
      references MEDIDAS (ID_MED)
      on delete restrict on update restrict;

alter table COMUNAS
   add constraint FK_COMUNAS_PERTENECE_REGIONES foreign key (NUMERO_REG)
      references REGIONES (NUMERO_REG)
      on delete restrict on update restrict;

alter table DONACIONES
   add constraint FK_DONACIONES_HEREDA_A4_MEDIDAS foreign key (ID_MED)
      references MEDIDAS (ID_MED)
      on delete restrict on update restrict;

alter table ELEMENTOS
   add constraint FK_ELEMENTOS_TIENE_RECOLECC foreign key (ID_MED, ID_RECOLECCIONES)
      references RECOLECCIONES (ID_MED, ID_RECOLECCIONES)
      on delete restrict on update restrict;

alter table MEDIDAS
   add constraint FK_MEDIDAS_TRATA_CATASTRO foreign key (ID_CATAS)
      references CATASTROFES (ID_CATAS)
      on delete restrict on update restrict;

alter table OCURRE
   add constraint FK_OCURRE_OCURRE_CATASTRO foreign key (ID_CATAS)
      references CATASTROFES (ID_CATAS)
      on delete restrict on update restrict;

alter table OCURRE
   add constraint FK_OCURRE_OCURRE2_COMUNAS foreign key (ID_COMUNAS)
      references COMUNAS (ID_COMUNAS)
      on delete restrict on update restrict;

alter table RECOLECCIONES
   add constraint FK_RECOLECC_HEREDA_A_MEDIDAS foreign key (ID_MED)
      references MEDIDAS (ID_MED)
      on delete restrict on update restrict;

alter table USUARIOS
   add constraint FK_USUARIOS_GESTIONA_MEDIDAS foreign key (ID_MED)
      references MEDIDAS (ID_MED)
      on delete restrict on update restrict;

alter table USUARIOS
   add constraint FK_USUARIOS_REGISTRA__LOGS foreign key (ID_LOGS)
      references LOGS (ID_LOGS)
      on delete restrict on update restrict;

alter table USUARIOS
   add constraint FK_USUARIOS_TIENE__TIPO_USU foreign key (ID_TIPO)
      references TIPO_USUARIOS (ID_TIPO)
      on delete restrict on update restrict;

alter table VOLUNTARIADOS
   add constraint FK_VOLUNTAR_HEREDA_A3_MEDIDAS foreign key (ID_MED)
      references MEDIDAS (ID_MED)
      on delete restrict on update restrict;

