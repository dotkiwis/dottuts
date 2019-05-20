#generate ssh key https://help.github.com/en/articles/adding-a-new-ssh-key-to-your-github-account

git clone git@github.com:dotkiwis/dotsite.git # clone the repo from web

cd dotsite # change to that directory

git checkout "yourbranch" # switch to your branch
# git checkout carbon

git branch # print the current branch

git status # check add/delete status of current branch

git add -A # add all changes 
git add "filename with extension" # add specific file
# git add hello.c

git commit -m "your message" # commit changes
# git commit -m "new feature"

git push origin "branchname" # push changes to cloud
# git push origin carbon

git pull # pull latest code

