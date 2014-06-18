#!/bin/sh

echo "Installing clean project..."

mv .git/modules .       && \
rm -rf .git/            && \
git init                && \
mv modules .git/        && \
git add assets/scss   && \
git add .gitmodules     && \
rm go

echo "Installing npm and bower dependencies..."
npm install
bower install

git status

echo "project successfully installed"