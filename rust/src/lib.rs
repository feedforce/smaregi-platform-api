
#![allow(warnings)]
#![allow(clippy::all)]
#![allow(unknown_lints)]

#[macro_use]
extern crate serde_derive;

#[macro_use]
extern crate log;

extern crate serde;
extern crate serde_json;
extern crate url;
extern crate reqwest;

pub mod apis;
pub mod models;
