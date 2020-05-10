# Czechdoc
Website for doctors in Czech republic who earned their degrees abroad - http://czechdoc.cz

This fork contains the changes done over the period of voluntarily supporting the project.

## Installation

1. `./up.sh`
2. The website will be available at http://localhost:8080

To make contact form work:
1. `cp configs/msmtprc.sample configs/msmtprc`
2. Enter smtp server info, for gmail server provide proper USERNAME and APP_PASSWORD
3. Uncomment [msmtprc config file mount](https://github.com/fernflower/czechdoc/blob/dockerizeNrefactor/docker-compose.yml#L19)

## TODO list

- [ ] Use template engine
- [ ] Add translations into czech and english
- [ ] Add a way to customize hardcoded-for-now params (email, tokens, docs)
- [ ] Be brave and switch to Jekyll?
