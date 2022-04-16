#!/bin/bash
podman build -t quay.io/apoczeka/app-info -f Containerfile
podman push quay.io/apoczeka/app-info
