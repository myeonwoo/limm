import sys
import os
import glob
import re

def main():
    
    argLength = len(sys.argv)
    args = sys.argv
    args[argLength-1] = (args[argLength-1]).replace('\r','')
    
    
    #===========================================================================
    # Option:        -thumb 
    # Description:   It's making thumb-images
    # Usage example: python util.py -thumb lim01
    #===========================================================================
    (success, index) = checkElement(sys.argv, '-thumb')
    if success:
        optionValue = sys.argv[index+1]
        createThumb(optionValue)
        
            
    
def createThumb(path):
    path = path+'/'
    #path = './'
    for cur in glob.glob( os.path.join(path, '*.*') ):
    
        arr = cur.split("/")
        preArr = arr[:len(arr)-1]
        filename = arr[len(arr)-1]
        dest = "/".join(preArr) + '/thumb/' + filename
        
        cmd = "convert " + cur + " -resize x100 " + dest
        #print(cmd)
        os.system(cmd)
        cmd = "chmod 744 " + dest
        #print(cmd)
        os.system(cmd)
        
    print("== completed creating thumb files ==")
        #print("current file is: " + infile)
    
        #os.system(cmd)
    # convert lim01/01.jpg -resize x100 lim01/thumb/01.jpg
    return

def checkElement(list, item):
    #===========================================================================
    # It check if list have item. 
    # If list have, then it also check if list have one more element after the item  
    #===========================================================================
    index = 0
    for i in list:
        if str(i) == str(item) and len(list) > index + 1:
            return (True, index)
        index = index + 1
    return (False, index)

if __name__=='__main__': main()