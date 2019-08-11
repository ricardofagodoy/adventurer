open -a XQuartz
#xhost +
./build/otclient
pgrep X11 | xargs kill
