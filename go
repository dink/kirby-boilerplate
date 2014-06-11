#!/bin/sh

echo "Installing clean project"

mv .git/modules .       && \
rm -rf .git/            && \
git init                && \
mv modules .git/        && \
git add assets/scss   && \
git add .gitmodules     && \
rm go

echo "project successfully installed"

git status
